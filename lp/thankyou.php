<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | The The Shakespeare Publishing House</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }
        a { text-decoration: none; color: inherit; }
        main { flex: 1; display: flex; justify-content: center; align-items: center; padding: 40px 20px; text-align: center; }

        /* Header + footer: same as the landing page (lp/index.php) */
        .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; }
        .top-header { background: #fff; padding: 16px 0; border-bottom: 1px solid #E5E7EB; }
        .header-inner { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        .header-inner .brand-logo { display: flex; align-items: center; }
        .header-inner .brand-logo img { height: 70px; width: auto; display: block; }
        .header-contact { display: flex; align-items: center; gap: 24px; font-size: 0.9rem; color: #666; flex-wrap: wrap; }
        .header-contact div { display: flex; align-items: center; gap: 8px; }
        .header-contact i { color: #F5B041; }
        .header-contact a:hover { color: #0E1B3D; }
        footer { background: #0B1432; color: rgba(255,255,255,0.6); padding: 40px 0; text-align: center; font-size: 0.8rem; }
        footer p { color: inherit; font-size: inherit; margin-bottom: 8px; }
        footer a { color: rgba(255,255,255,0.6); margin: 0 10px; }
        footer a:hover { color: #fff; }
        @media (max-width: 768px) {
            .container { padding: 0 16px; }
            .header-inner { flex-direction: column; text-align: center; }
            .header-contact { flex-direction: column; gap: 8px; }
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
    <header class="top-header">
        <div class="container header-inner">
            <a href="/" class="brand-logo">
                <img src="https://shakespearepublishinghouse.com/assets/images/logo.png" alt="The Shakespeare Publishing House">
            </a>
            <div class="header-contact">
                <div><i class="fas fa-envelope"></i> <a href="mailto:info@theshakespearepublishinghouse.com">info@theshakespearepublishinghouse.com</a></div>
                <div><i class="fas fa-phone-alt"></i> <a href="tel:+16463893047" style="font-weight:700;">+1 646 389 3047</a></div>
                <div><i class="fas fa-clock"></i> Mon - Fri, 9 AM - 6 PM</div>
            </div>
        </div>
    </header>

    <main>
    <div class="thank-you-box">
        <!-- 🟢 Logo automatically pulls from your main assets folder -->
        <img src="https://shakespearepublishinghouse.com/assets/images/logo.png" alt="The Shakespeare Publishing House">
        
        <h1>Thank You!</h1>
        <p>Your consultation request has been submitted successfully. Our publishing experts will review your details and reach out to you within 15 minutes.</p>
        
        <a href="/" class="btn-back">Return to Homepage</a>
    </div>
    </main>

    <footer><div class="container"><p>&copy; 2026 The Shakespeare Publishing House. All rights reserved.</p><a href="https://theshakespearepublishinghouse.com/Terms-and-conditions.php">Terms and Conditions</a><a href="https://theshakespearepublishinghouse.com/Privacy-Policy.php">Privacy Policy</a></div></footer>
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