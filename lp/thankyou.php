<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | The The Shakespeare Publishing House</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background: #f8f9fa; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            margin: 0; 
            text-align: center; 
            padding: 20px;
        }
        .thank-you-box { 
            background: #fff; 
            padding: 50px 40px; 
            border-radius: 16px; 
            box-shadow: 0 20px 50px rgba(14, 27, 61, 0.1); 
            max-width: 520px; 
            width: 100%; 
            border-top: 5px solid #F5B041; 
        }
        .thank-you-box img { 
            height: 80px; 
            width: auto; 
            margin-bottom: 20px; 
        }
        h1 { 
            font-family: 'Poppins', sans-serif; 
            color: #0E1B3D; 
            margin-bottom: 10px; 
            font-size: 2rem;
        }
        p { 
            color: #666; 
            margin-bottom: 25px; 
            font-size: 1.05rem; 
            line-height: 1.6; 
        }
        .btn-back { 
            display: inline-block; 
            background: #F5B041; 
            color: #0B1432; 
            padding: 14px 32px; 
            border-radius: 50px; 
            text-decoration: none; 
            font-weight: 700; 
            transition: all 0.3s ease;
            box-shadow: 0 8px 18px rgba(245, 176, 65, 0.3);
        }
        .btn-back:hover { 
            background: #D9992A; 
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(245, 176, 65, 0.4);
        }
    </style>
    


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18347661667"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-18347661667');
</script>

    <!-- Event snippet for thank you conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-18347661667/aa05CN-8_tscEOOy7KxE'});
</script>
    
</head>
<body>
    <div class="thank-you-box">
        <!-- 🟢 Logo automatically pulls from your main assets folder -->
        <img src="https://shakespearepublishinghouse.com/assets/images/logo.png" alt="The Shakespeare Publishing House">
        
        <h1>Thank You!</h1>
        <p>Your consultation request has been submitted successfully. Our publishing experts will review your details and reach out to you within 15 minutes.</p>
        
        <a href="/" class="btn-back">Return to Homepage</a>
    </div>
</body>

 <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=eb0092bd-b6da-4958-9379-b51e54268e92"></script>
 <!-- End of Zendesk Widget script -->
    <script>
        window.openZendeskChatWidget = function () {
            if (typeof zE !== 'undefined') {
                zE('webWidget', 'open');
            }
        };

        window.addEventListener('load', function () {
            const chatToggle = document.getElementById("chat_toggle");
            if (chatToggle) {
                chatToggle.addEventListener("click", function () {
                    window.openZendeskChatWidget();
                });
            }

            const interval = setInterval(() => {
                if (typeof zE !== 'undefined') {
                    zE('webWidget:on', 'chat:unreadMessages', function (numberOfUnreadMessages) {
                        if (numberOfUnreadMessages > 0) {
                            window.openZendeskChatWidget();
                        }
                    });
                    clearInterval(interval);
                }
            }, 500);
        });
    </script>
</html>