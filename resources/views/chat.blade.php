<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>پیکج چت روم — Laravel + WebSocket</title>

    <!-- بارگذاری فایل‌های CSS و JS از طریق Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* ====== variables & reset ====== */
        :root{
            --bg:#f6f7fb; --card:#ffffff; --muted:#6b7280; --accent:#4f46e5; --accent-2:#06b6d4; --incoming:#eef2ff; --outgoing:#dcfce7;
            --radius:14px; --glass: rgba(255,255,255,0.6);
            --font-family: "Vazirmatn", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        /* dark theme */
        .theme-toggle:checked ~ .app { --bg:#0b1220; --card:#0f1724; --muted:#9ca3af; --accent:#7c3aed; --accent-2:#06b6d4; --incoming:#0b1228; --outgoing:#052816; --glass: rgba(255,255,255,0.03); }

        *{box-sizing:border-box}
        html,body{height:100%;margin:0;font-family:var(--font-family);background:linear-gradient(180deg,var(--bg),#fff);}
        img{max-width:100%;display:block}

        /* ====== layout ====== */
        .app{
            max-width:1100px;margin:28px auto;padding:18px;display:grid;grid-template-columns:320px 1fr;gap:18px;min-height:76vh;align-items:start;
        }

        .panel{background:var(--card);border-radius:var(--radius);box-shadow:0 6px 20px rgba(2,6,23,0.08);overflow:hidden}

        /* sidebar */
        .sidebar{display:flex;flex-direction:column;height:100%}
        .brand{display:flex;align-items:center;gap:12px;padding:16px 18px;border-bottom:1px solid rgba(0,0,0,0.04)}
        .logo{width:44px;height:44px;border-radius:10px;background:linear-gradient(135deg,var(--accent),var(--accent-2));display:flex;align-items:center;justify-content:center;color:white;font-weight:700}
        .brand h1{font-size:16px;margin:0}
        .brand p{margin:0;font-size:12px;color:var(--muted)}

        .search{padding:14px 16px;border-bottom:1px solid rgba(0,0,0,0.04)}
        .search input{width:100%;padding:10px 12px;border-radius:10px;border:1px solid rgba(0,0,0,0.06);background:transparent}

        .conversations{padding:10px;overflow:auto}
        .conv{display:flex;gap:12px;align-items:center;padding:10px;border-radius:10px;cursor:pointer;transition:background 0.2s}
        .conv:hover{background:linear-gradient(90deg, rgba(79,70,229,0.06), rgba(6,182,212,0.02))}
        .conv.active{background:linear-gradient(90deg, rgba(79,70,229,0.12), rgba(6,182,212,0.06));border:1px solid var(--accent)}
        .avatar{width:48px;height:48px;border-radius:50%;background:#eef2ff;display:flex;align-items:center;justify-content:center;font-weight:700;flex-shrink:0}
        .conv .meta{flex:1;min-width:0}
        .conv .meta h3{margin:0;font-size:14px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
        .conv .meta p{margin:2px 0 0 0;font-size:12px;color:var(--muted);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
        .unread-badge{background:var(--accent);color:white;border-radius:50%;width:20px;height:20px;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:600;flex-shrink:0}

        /* main chat area */
        .chat{display:flex;flex-direction:column;height:72vh}
        .chat-header{display:flex;align-items:center;gap:12px;padding:16px;border-bottom:1px solid rgba(0,0,0,0.04)}
        .chat-body{padding:20px;flex:1;overflow:auto;background:linear-gradient(180deg, transparent, rgba(0,0,0,0.02));display:flex;flex-direction:column;gap:12px}
        .empty-chat{display:flex;flex-direction:column;align-items:center;justify-content:center;height:100%;color:var(--muted);text-align:center;padding:40px}
        .empty-chat p{margin:8px 0;font-size:14px}

        /* messages */
        .message{max-width:70%;padding:12px 14px;border-radius:12px;font-size:14px;line-height:1.3}
        .incoming{align-self:flex-start;background:var(--incoming);border:1px solid rgba(0,0,0,0.03)}
        .outgoing{align-self:flex-end;background:var(--outgoing);border:1px solid rgba(0,0,0,0.03)}
        .meta-line{display:flex;gap:8px;align-items:center;font-size:12px;color:var(--muted);margin-top:6px}

        /* input area */
        .composer{padding:14px;border-top:1px solid rgba(0,0,0,0.04);display:flex;gap:12px;align-items:center}
        .composer form{display:flex;flex:1;gap:12px}
        .input{flex:1;display:flex;gap:8px;align-items:center;padding:10px;border-radius:12px;border:1px solid rgba(0,0,0,0.06);background:var(--glass)}
        .input textarea{flex:1;border:0;background:transparent;resize:none;padding:8px;font-family:inherit;font-size:14px;min-height:44px}
        .send{background:var(--accent);color:white;padding:10px 14px;border-radius:10px;border:0;font-weight:600;cursor:pointer}

        /* small screens */
        @media (max-width:880px){
            .app{grid-template-columns:1fr;min-height:90vh}
            .sidebar{order:2}
            .chat{order:1}
            .chat{height:64vh}
        }

        /* decorative header controls */
        .controls{margin-left:auto;display:flex;gap:8px;align-items:center}
        .theme-switch{display:flex;align-items:center;gap:8px}
        .theme-toggle{position:absolute;left:-9999px}
        .theme-toggle-label{cursor:pointer;padding:6px 10px;border-radius:8px;border:1px solid rgba(0,0,0,0.06)}

        /* accessibility tweaks */
        .conv:focus{outline:3px solid rgba(79,70,229,0.16)}
        button:focus, input:focus, textarea:focus{outline:3px solid rgba(79,70,229,0.12)}
    </style>
</head>
<body>
<!-- theme toggle uses a hidden checkbox; purely CSS-driven -->
<input class="theme-toggle" id="tt" type="checkbox" aria-hidden="true">

<main class="app">
    <!-- sidebar -->
    <aside class="panel sidebar" aria-label="فهرست چت‌ها">
        <div class="brand">
            <div class="logo">CR</div>
            <div>
                <h1>ChatRoom</h1>
                <p>Laravel + WebSocket</p>
            </div>
            <div class="controls" aria-hidden="true">
                <label for="tt" class="theme-toggle-label" title="تغییر تم">تم</label>
            </div>
        </div>

        <div class="search">
            <label class="visually-hidden">جستجوی گفتگو</label>
            <input type="search" placeholder="جستجوی گفتگو یا مخاطب..." aria-label="جستجوی گفتگو">
        </div>

        <div class="conversations">
            <!-- لیست کاربران اینجا لود میشه -->
            <div id="conversations-list">
                @foreach($users as $user)
                <div class="conv" data-user-id="{{ $user->id }}" onclick="selectUser({{ $user->id }}, '{{ $user->name }}')">
                    <div class="avatar">{{ substr($user->name, 0, 2) }}</div>
                    <div class="meta">
                        <h3>{{ $user->name }}</h3>
                        <p>برای شروع چت کلیک کنید</p>
                    </div>
                    <span class="unread-badge" id="unread-{{ $user->id }}" style="display:none">0</span>
                </div>
                @endforeach
            </div>
        </div>
    </aside>

    <!-- chat area -->
    <section class="panel chat" aria-label="پنجره گفتگو">
        <header class="chat-header">
            <div class="avatar" id="current-chat-avatar">?</div>
            <div>
                <strong id="chat-user-name">یک کاربر را انتخاب کنید</strong>
                <div id="chat-status" style="font-size:12px;color:var(--muted)">برای شروع چت، کاربری را از لیست انتخاب کنید</div>
            </div>
        </header>

        <div class="chat-body" id="messages" tabindex="0" aria-live="polite">
            <div class="empty-chat" id="empty-chat">
                <p>👋</p>
                <p>برای شروع چت، یک کاربر را از لیست سمت راست انتخاب کنید</p>
            </div>
        </div>

        <div class="composer" id="composer" style="display:none">
            <form action="#" id="message-form" method="post">
                @csrf
                <input type="hidden" id="receiver_id" name="receiver_id" value="">
                <div class="input" role="search">
                    <textarea id="message" name="message" placeholder="پیام بنویسید..." aria-label="پیام" rows="1" required></textarea>
                    <button type="submit" class="send">ارسال</button>
                </div>
            </form>
        </div>
    </section>
</main>

<script>
    window.addEventListener('load', function(){
        const messagesContainer = document.getElementById('messages');
        const messageForm = document.getElementById('message-form');
        const messageInput = document.getElementById('message');
        const receiverIdInput = document.getElementById('receiver_id');
        const composer = document.getElementById('composer');
        const emptyChat = document.getElementById('empty-chat');
        
        let currentUserId = {{ $currentUser->id }};
        let selectedUserId = null;
        let currentChannel = null;

        // تابع برای نمایش پیام
        function addMessage(message, isOwn = false) {
            // حذف پیام خالی اگر وجود دارد
            if (emptyChat && emptyChat.parentNode) {
                emptyChat.remove();
            }
            
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${isOwn ? 'outgoing' : 'incoming'}`;
            
            const messageText = document.createElement('div');
            messageText.textContent = message.message;
            messageDiv.appendChild(messageText);
            
            const metaLine = document.createElement('div');
            metaLine.className = 'meta-line';
            
            const usernameSpan = document.createElement('span');
            usernameSpan.textContent = isOwn ? 'شما' : (message.sender?.name || 'کاربر');
            usernameSpan.style.fontWeight = '600';
            
            const timeSpan = document.createElement('span');
            const messageTime = message.created_at ? new Date(message.created_at) : new Date();
            timeSpan.textContent = messageTime.toLocaleTimeString('fa-IR', { 
                hour: '2-digit', 
                minute: '2-digit' 
            });
            
            metaLine.appendChild(usernameSpan);
            metaLine.appendChild(timeSpan);
            messageDiv.appendChild(metaLine);
            
            messagesContainer.appendChild(messageDiv);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        // بارگذاری پیام‌های بین دو کاربر
        async function loadMessages(otherUserId) {
            try {
                const response = await axios.get('/chat/messages', {
                    params: { other_user_id: otherUserId }
                });
                
                messagesContainer.innerHTML = '';
                
                if (response.data.length === 0) {
                    messagesContainer.appendChild(emptyChat);
                } else {
                    response.data.forEach(message => {
                        const isOwn = message.sender_id === currentUserId;
                        addMessage(message, isOwn);
                    });
                }
            } catch (error) {
                console.error('خطا در بارگذاری پیام‌ها:', error);
            }
        }

        // انتخاب کاربر برای چت
        window.selectUser = function(userId, userName) {
            selectedUserId = userId;
            receiverIdInput.value = userId;
            
            // به‌روزرسانی UI
            document.getElementById('chat-user-name').textContent = userName;
            document.getElementById('current-chat-avatar').textContent = userName.substring(0, 2);
            document.getElementById('chat-status').textContent = 'آنلاین';
            
            // فعال کردن composer
            composer.style.display = 'flex';
            
            // علامت‌گذاری کاربر انتخاب شده
            document.querySelectorAll('.conv').forEach(conv => {
                conv.classList.remove('active');
            });
            document.querySelector(`[data-user-id="${userId}"]`).classList.add('active');
            
            // قطع اتصال از channel قبلی
            if (currentChannel) {
                try {
                    Echo.leave(`private-chat.${getChannelName(currentUserId, selectedUserId)}`);
                } catch (e) {
                    console.warn('Error leaving channel:', e);
                }
            }
            
            // اتصال به channel جدید
            const channelName = getChannelName(currentUserId, userId);
            try {
                currentChannel = Echo.private(`private-chat.${channelName}`)
                    .listen('.new-message', (e) => {
                        const message = e.message;
                        // فقط اگر پیام مربوط به چت فعلی است، نمایش بده
                        if ((message.sender_id === userId && message.receiver_id === currentUserId) ||
                            (message.sender_id === currentUserId && message.receiver_id === userId)) {
                            const isOwn = message.sender_id === currentUserId;
                            addMessage(message, isOwn);
                        }
                    })
                    .error((error) => {
                        console.error('Channel subscription error:', error);
                        alert('خطا در اتصال به چت. لطفا صفحه را رفرش کنید.');
                    });
            } catch (e) {
                console.error('Error subscribing to channel:', e);
                alert('خطا در اتصال به چت. لطفا صفحه را رفرش کنید.');
            }
            
            // بارگذاری پیام‌ها
            loadMessages(userId);
        };

        // ایجاد نام channel یکسان برای دو کاربر
        function getChannelName(userId1, userId2) {
            const minId = Math.min(userId1, userId2);
            const maxId = Math.max(userId1, userId2);
            return `${minId}.${maxId}`;
        }

        // ارسال پیام
        messageForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            if (!selectedUserId) {
                alert('لطفا ابتدا یک کاربر را انتخاب کنید');
                return;
            }
            
            const messageText = messageInput.value.trim();
            if (!messageText) return;

            // نمایش پیام به صورت موقت
            const tempMessage = {
                message: messageText,
                sender_id: currentUserId,
                receiver_id: selectedUserId,
                created_at: new Date().toISOString()
            };
            addMessage(tempMessage, true);
            messageInput.value = '';
            messageInput.style.height = 'auto';

            try {
                const response = await axios.post('/chat/send', {
                    message: messageText,
                    receiver_id: selectedUserId
                });
                
                console.log('پیام با موفقیت ارسال شد:', response.data);
                
                // اگر پیام با موفقیت ارسال شد، نیازی به کار دیگری نیست
                // چون از طریق WebSocket دریافت می‌شود
            } catch (error) {
                console.error('خطا در ارسال پیام:', error);
                console.error('Error details:', {
                    message: error.message,
                    response: error.response?.data,
                    status: error.response?.status,
                    statusText: error.response?.statusText
                });
                
                // حذف پیام موقت در صورت خطا
                const messages = messagesContainer.querySelectorAll('.message');
                if (messages.length > 0) {
                    messages[messages.length - 1].remove();
                }
                
                // نمایش پیام خطا
                let errorMessage = 'خطا در ارسال پیام. لطفا دوباره تلاش کنید.';
                if (error.response) {
                    if (error.response.data && error.response.data.message) {
                        errorMessage = error.response.data.message;
                    } else if (error.response.data && error.response.data.error) {
                        errorMessage = error.response.data.error;
                    } else if (error.response.status === 422) {
                        errorMessage = 'لطفا تمام فیلدها را به درستی پر کنید.';
                        if (error.response.data && error.response.data.errors) {
                            const errors = Object.values(error.response.data.errors).flat();
                            errorMessage += '\n' + errors.join('\n');
                        }
                    } else if (error.response.status === 401) {
                        errorMessage = 'لطفا دوباره وارد شوید.';
                    } else if (error.response.status === 500) {
                        errorMessage = 'خطای سرور. لطفا لاگ‌های سرور را بررسی کنید.';
                    }
                } else if (error.request) {
                    errorMessage = 'خطا در اتصال به سرور. لطفا اتصال اینترنت خود را بررسی کنید.';
                }
                alert(errorMessage);
            }
        });

        // تنظیم ارتفاع textarea به صورت خودکار
        messageInput.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

        // بارگذاری لیست کاربران و تعداد پیام‌های خوانده نشده
        async function loadUsers() {
            try {
                const response = await axios.get('/chat/users');
                response.data.forEach(user => {
                    const unreadBadge = document.getElementById(`unread-${user.id}`);
                    if (unreadBadge && user.unread_count > 0) {
                        unreadBadge.textContent = user.unread_count;
                        unreadBadge.style.display = 'flex';
                    }
                });
            } catch (error) {
                console.error('خطا در بارگذاری کاربران:', error);
            }
        }

        loadUsers();
    });
</script>
</body>
</html>
