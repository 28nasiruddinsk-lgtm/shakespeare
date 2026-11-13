<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reliable Book Publishing Company | The Shakespeare Publishing House</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
        <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=eb0092bd-b6da-4958-9379-b51e54268e92"></script>

    <style>
        :root {
            --navy: #0E1B3D;
            --navy-deep: #0B1432;
            --gold: #F5B041;
            --gold-dark: #D9992A;
            --orange-cta: #F39C12;
            --bg-white: #FFFFFF;
            --bg-soft: #F8F9FA;
            --text-main: #333333;
            --text-muted: #666666;
            --border-color: #E5E7EB;
            --shadow: 0 10px 30px rgba(14, 27, 61, 0.1);
            --shadow-lg: 0 20px 50px rgba(14, 27, 61, 0.2);
            --radius: 12px;
            --font-head: 'Poppins', sans-serif;
            --font-body: 'Inter', sans-serif;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: var(--font-body); background: var(--bg-white); color: var(--text-main); line-height: 1.7; }
        a { text-decoration: none; color: inherit; transition: 0.2s; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; }

        /* Top Header */
        .top-header { background: var(--bg-white); padding: 16px 0; border-bottom: 1px solid var(--border-color); position: sticky; top: 0; z-index: 90; }
        .header-inner { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        .header-inner .brand-logo { display: flex; align-items: center; }
        .header-inner .brand-logo img { height: 70px; width: auto; display: block; }
        .header-contact { display: flex; align-items: center; gap: 24px; font-size: 0.9rem; color: var(--text-muted); flex-wrap: wrap; }
        .header-contact div { display: flex; align-items: center; gap: 8px; }
        .header-contact i { color: var(--gold); }
        .header-contact a:hover { color: var(--navy); }

        /* Top Banner */
        .top-banner { background: var(--navy-deep); color: #fff; text-align: center; padding: 8px 16px; font-size: 0.85rem; font-family: var(--font-head); border-bottom: 1px solid rgba(255,255,255,0.05); }
        .top-banner strong { color: var(--gold); }

        /* Hero */
        .hero { background: linear-gradient(135deg, #162A53, var(--navy-deep)); color: #fff; padding: 70px 0; }
        .hero-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
        .hero-left h1 { font-family: var(--font-head); font-size: clamp(1.8rem, 4vw, 3.5rem); font-weight: 800; line-height: 1.1; margin-bottom: 20px; text-transform: uppercase; }
        .hero-left h1 .highlight { color: var(--gold); }
        .hero-left p { color: rgba(255,255,255,0.8); font-size: 1.05rem; margin-bottom: 30px; max-width: 480px; }
        .features-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 35px; }
        .feature-item { display: flex; align-items: center; gap: 12px; font-size: 0.9rem; font-weight: 500; font-family: var(--font-head); }
        .feature-item i { color: var(--gold); font-size: 1.2rem; width: 30px; text-align: center; }
        .hero-btns { display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 25px; }
        .btn { font-family: var(--font-head); font-weight: 600; padding: 14px 28px; border-radius: 50px; border: 2px solid transparent; display: inline-flex; align-items: center; gap: 8px; cursor: pointer; transition: all 0.3s ease; }
        .btn-gold { background: var(--gold); color: var(--navy-deep); }
        .btn-gold:hover { background: var(--gold-dark); transform: translateY(-2px); box-shadow: 0 10px 20px rgba(245, 176, 65, 0.4); }
        .btn-outline-light { background: transparent; border-color: rgba(255,255,255,0.4); color: #fff; }
        .btn-outline-light:hover { background: #fff; color: var(--navy); border-color: #fff; }
        .btn-block { width: 100%; justify-content: center; }
        .rating-badge { display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,0.1); padding: 8px 20px; border-radius: 50px; font-size: 0.85rem; font-weight: 500; font-family: var(--font-head); backdrop-filter: blur(4px); flex-wrap: wrap; }
        .rating-badge i { color: var(--gold); }

        /* Orange Form Card */
        .orange-form-card { background: var(--orange-cta); border-radius: var(--radius); padding: 40px 30px; color: #fff; box-shadow: var(--shadow); display: flex; flex-direction: column; justify-content: space-between; height: 100%; }
        .orange-form-card h3 { font-family: var(--font-head); color: #fff; font-size: 1.6rem; margin-bottom: 24px; }
        .orange-form-card label { font-family: var(--font-head); font-weight: 600; font-size: 0.9rem; display: block; margin-bottom: 4px; margin-top: 16px; }
        .orange-form-card input, .orange-form-card textarea { width: 100%; padding: 14px 16px; border: none; border-radius: 8px; font-family: var(--font-body); background: #fff; font-size: 0.95rem; transition: 0.2s; }
        .orange-form-card input:focus, .orange-form-card textarea:focus { outline: 2px solid var(--navy); }
        .orange-form-card textarea { resize: vertical; min-height: 80px; }
        .btn-white { background: #fff; color: var(--orange-cta); border: none; padding: 16px 30px; border-radius: 50px; font-weight: 700; font-size: 1rem; width: 100%; justify-content: center; display: inline-flex; align-items: center; gap: 8px; cursor: pointer; transition: all 0.3s ease; }
        .btn-white:hover { background: var(--navy); color: #fff; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(0,0,0,0.15); }

        /* General Form Cards */
        .form-card { background: #fff; border-radius: var(--radius); padding: 35px; box-shadow: var(--shadow-lg); position: relative; overflow: hidden; }
        .form-card .ribbon { position: absolute; top: 0; right: 0; background: var(--gold); color: var(--navy-deep); font-family: var(--font-head); font-weight: 700; font-size: 0.7rem; padding: 6px 18px; border-bottom-left-radius: var(--radius); }
        .form-card h3 { font-family: var(--font-head); color: var(--navy); font-size: 1.3rem; margin-bottom: 6px; }
        .form-card p { color: var(--text-muted); font-size: 0.9rem; margin-bottom: 20px; }
        .form-card form { display: flex; flex-direction: column; gap: 14px; }
        .form-card input, .form-card textarea { width: 100%; padding: 12px 16px; border: 1px solid var(--border-color); border-radius: 8px; font-family: var(--font-body); background: var(--bg-soft); transition: 0.2s; }
        .form-card input:focus, .form-card textarea:focus { outline: none; border-color: var(--gold); box-shadow: 0 0 0 3px rgba(245, 176, 65, 0.2); }
        .form-card .form-footer { display: flex; gap: 10px; justify-content: center; font-size: 0.75rem; color: var(--text-muted); margin-top: 6px; flex-wrap: wrap; }
        .form-card .form-footer span { display: flex; align-items: center; gap: 4px; }
        .form-card .form-footer i { color: var(--gold); }

        /* Sections */
        .section { padding: 70px 0; }
        .section-title { text-align: center; margin-bottom: 40px; }
        .section-title h2 { font-family: var(--font-head); color: var(--navy); font-size: clamp(1.6rem, 2.5vw, 2.4rem); margin-bottom: 8px; }
        .section-title p { color: var(--text-muted); max-width: 600px; margin: 0 auto; }
        .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }

        /* About Section */
        .about-content h3 { font-family: var(--font-head); font-size: 1.8rem; color: var(--navy); margin-bottom: 15px; }
        .about-content p { color: var(--text-muted); margin-bottom: 15px; }
        .about-features { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 25px; }
        .about-feat { display: flex; align-items: center; gap: 12px; }
        .about-feat i { color: #fff; background: var(--gold); padding: 8px; border-radius: 50%; font-size: 0.9rem; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .about-feat strong { font-family: var(--font-head); font-size: 0.9rem; color: var(--navy); }

        /* Services Grid */
        .section-soft { background: var(--bg-soft); }
        .services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }
        .service-card { background: #fff; padding: 30px; border-radius: var(--radius); border: 1px solid var(--border-color); box-shadow: var(--shadow); transition: 0.3s; text-align: center; }
        .service-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }
        .service-card i { font-size: 2.5rem; color: var(--gold); margin-bottom: 15px; display: inline-block; }
        .service-card h4 { font-family: var(--font-head); color: var(--navy); margin-bottom: 8px; }
        .service-card p { color: var(--text-muted); font-size: 0.9rem; }

        /* Stats Grid */
        .stats-section { background: var(--bg-soft); border-bottom: 1px solid var(--border-color); padding: 30px 0; }
        .stats-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 15px; text-align: center; }
        .stat-item { border-right: 1px solid var(--border-color); padding: 0 10px; }
        .stat-item:last-child { border-right: none; }
        .stat-item h4 { font-family: var(--font-head); font-size: 1.8rem; font-weight: 700; color: var(--navy); display: flex; align-items: center; justify-content: center; gap: 2px; }
        .stat-item h4 i { color: var(--gold); font-size: 1.2rem; }
        .stat-item span { color: var(--text-muted); font-size: 0.8rem; font-weight: 500; }

        /* Clickable Publishing Models Tabs */
        .models-section { background: linear-gradient(135deg, #162A53, var(--navy-deep)); color: #fff; }
        .models-section .section-title h2 { color: #fff; }
        .models-section .section-title p { color: rgba(255,255,255,0.7); }
        .models-layout { display: grid; grid-template-columns: 0.8fr 1.2fr; gap: 40px; align-items: flex-start; }
        .models-list { background: rgba(255,255,255,0.05); border-radius: var(--radius); padding: 20px; display: flex; flex-direction: column; gap: 6px; }
        .models-list li { padding: 14px 18px; border-bottom: 1px solid rgba(255,255,255,0.05); font-family: var(--font-head); font-weight: 500; display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: 0.2s; border-radius: 6px; }
        .models-list li:hover, .models-list li.active { background: var(--gold); color: var(--navy-deep); }
        .models-list li:last-child { border-bottom: none; }
        .models-list li i { transition: 0.2s; }
        .models-list li:hover i, .models-list li.active i { transform: translateX(5px); }
        .models-cards-container { background: #fff; border-radius: var(--radius); padding: 30px; min-height: 250px; display: flex; flex-direction: column; justify-content: center; box-shadow: var(--shadow-lg); }
        .model-card { color: var(--text-main); display: none; animation: fadeTab 0.4s ease-out; }
        .model-card.active { display: block; }
        @keyframes fadeTab { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        .model-card h5 { font-family: var(--font-head); color: var(--navy); font-size: 1.8rem; margin-bottom: 16px; border-bottom: 2px solid var(--gold); padding-bottom: 12px; display: inline-block; }
        .model-card p { font-size: 1rem; color: var(--text-muted); line-height: 1.7; max-width: 90%; }

        /* BOOK CAROUSEL - CLEAN + TRUE INFINITE LOOP */
        .books-gallery-section { background: #fff; padding: 80px 0; }
        .books-header { text-align: center; margin-bottom: 40px; }
        .books-header .eyebrow { color: var(--gold); font-family: var(--font-head); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; display: inline-block; margin-bottom: 10px; }
        .books-header h2 { font-family: var(--font-head); color: var(--navy); font-size: clamp(1.6rem, 2.5vw, 2.4rem); margin-bottom: 8px; }
        .books-header p { color: #555; max-width: 700px; margin: 0 auto; font-size: 1.05rem; }

        .books-carousel-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 0 4px;
        }

        .books-track-container {
            overflow: hidden;
            flex: 1;
            min-width: 0;
        }

        .books-track {
            display: flex;
            align-items: center;
            gap: 24px;
            transition: transform 0.55s cubic-bezier(0.25, 1, 0.5, 1);
            will-change: transform;
            touch-action: pan-y;
        }

        /* No white cards / no fake books behind the actual covers */
        .book-item {
            flex: 0 0 calc((100% - 48px) / 3);
            min-width: 0;
            max-width: none;
            margin: 0;
            padding: 0;
            background: transparent;
            border: 0;
            border-radius: 0;
            box-shadow: none;
            text-align: center;
            transform: none;
        }

        .book-item:hover { transform: none; }

        .book-item img {
            display: block;
            width: auto;
            max-width: 100%;
            height: 350px;
            max-height: 350px;
            aspect-ratio: auto;
            object-fit: contain;
            margin: 0 auto;
            padding: 0;
            background: transparent;
            border-radius: 0;
        }

        .book-item.clone { pointer-events: none; }

        .books-carousel-controls { display: flex; align-items: center; justify-content: center; gap: 20px; margin-top: 32px; }
        .slider-btn { width: 44px; height: 44px; border-radius: 50%; background: var(--navy); color: #fff; border: none; cursor: pointer; transition: 0.2s; display: flex; align-items: center; justify-content: center; flex-shrink: 0; z-index: 2; }
        .slider-btn:hover { background: var(--gold); color: var(--navy); }
        .slider-btn.square { width: 44px; height: 44px; border-radius: 6px; border: 1px solid #bbb; background: #fff; color: var(--text-main); }
        .slider-btn.square:hover { border-color: var(--gold); background: var(--bg-soft); }
        .slider-dots { display: flex; gap: 10px; flex-wrap: wrap; justify-content: center; }
        .slider-dots span { width: 10px; height: 10px; border-radius: 50%; background: #ddd; cursor: pointer; transition: background 0.3s, transform 0.3s; }
        .slider-dots span.active { background: var(--navy); transform: scale(1.1); }

        @media (max-width: 1024px) {
            .books-track { gap: 24px; }
            .book-item { flex-basis: calc((100% - 24px) / 2); }
            .book-item img { height: 320px; max-height: 320px; }
        }

        @media (max-width: 640px) {
            .books-gallery-section { padding: 40px 0; }
            .books-header { margin-bottom: 28px; }
            .books-carousel-wrapper { gap: 8px; padding: 0; }
            .books-track { gap: 0; }
            .book-item { flex: 0 0 100%; max-width: none; margin: 0; padding: 0 8px; }
            .book-item img { height: 255px; max-height: 255px; max-width: 180px; }
            .slider-btn, .slider-btn.square { width: 34px; height: 34px; min-width: 34px; font-size: 0.72rem; }
            .books-carousel-controls { margin-top: 24px; }
            .slider-dots { gap: 7px; }
            .slider-dots span { width: 8px; height: 8px; }
        }

        @media (max-width: 400px) {
            .book-item { max-width: none; }
            .book-item img { height: 235px; max-height: 235px; max-width: 165px; }
        }

        

        /* Process */
        .process-section { background: var(--bg-soft); }
        .process-layout { display: grid; grid-template-columns: 1.5fr 1fr; gap: 40px; align-items: center; }
        .process-steps { display: flex; justify-content: space-between; position: relative; padding: 20px 0; }
        .process-steps::before { content: ''; position: absolute; top: 50%; left: 10%; right: 10%; height: 2px; background: #ddd; z-index: 1; transform: translateY(-50%); }
        .step { position: relative; z-index: 2; text-align: center; flex: 1; }
        .step-circle { width: 60px; height: 60px; border-radius: 50%; background: #fff; border: 3px solid var(--gold); display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; color: var(--navy); font-weight: 700; font-size: 1.2rem; }
        .step h5 { font-family: var(--font-head); font-size: 0.8rem; color: var(--navy); }
        .process-cta { background: var(--navy); color: #fff; padding: 40px; border-radius: var(--radius); text-align: center; position: relative; overflow: hidden; }
        .process-cta::before { content: ''; position: absolute; right: -50px; bottom: -50px; width: 150px; height: 150px; background: rgba(255,255,255,0.05); border-radius: 50%; }
        .process-cta h3 { font-family: var(--font-head); margin-bottom: 15px; font-size: 1.5rem; }
        .process-cta p { color: rgba(255,255,255,0.8); margin-bottom: 20px; font-size: 0.9rem; }

        /* Testimonials */
        .testimonials-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }

        /* Partners Logos */
        .partners-section { border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); padding: 30px 0; background: #fff; }
        .partners-grid { display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 30px; }
        .partners-grid img { height: 35px; object-fit: contain; opacity: 0.5; transition: opacity 0.3s, transform 0.3s; filter: grayscale(100%); }
        .partners-grid img:hover { opacity: 1; transform: scale(1.1); filter: grayscale(0%); }

        /* Final CTA */
        .final-cta { background: var(--navy); color: #fff; text-align: center; padding: 60px 0; }
        .final-cta h2 { font-family: var(--font-head); font-size: clamp(1.6rem, 3vw, 2.5rem); margin-bottom: 10px; }
        .final-cta p { color: rgba(255,255,255,0.8); margin-bottom: 30px; }
        .final-cta .btns { display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; }

        /* CTA Section Before Footer */
        .cta-before-footer { padding: 80px 0; background: #fff; }
        .cta-before-footer .grid-2 { align-items: stretch; gap: 50px; }
        .cta-right-content { display: flex; flex-direction: column; justify-content: center; }
        .cta-right-content h3 { font-family: var(--font-head); color: var(--navy); font-size: 1.8rem; margin-bottom: 24px; line-height: 1.2; }
        .cta-benefits-list { display: flex; flex-direction: column; gap: 18px; margin-top: 20px; }
        .cta-benefits-list li { display: flex; gap: 16px; align-items: flex-start; color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; }
        .cta-benefits-list li .check-icon { color: var(--orange-cta); font-size: 1.4rem; flex-shrink: 0; margin-top: 2px; }
        .cta-benefits-list li .li-text { flex: 1; }
        .cta-benefits-list li strong { color: var(--navy); font-family: var(--font-head); font-weight: 700; }

        /* FLOATING CONTACT BUTTON (NAVY BLUE) */
        .floating-contact-trigger {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            background: var(--navy);
            color: #fff;
            padding: 16px 18px;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
            cursor: pointer;
            z-index: 998;
            font-family: var(--font-head);
            font-weight: 700;
            writing-mode: vertical-rl;
            text-orientation: mixed;
            letter-spacing: 2px;
            box-shadow: -2px 4px 10px rgba(0,0,0,0.2);
            transition: 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .floating-contact-trigger:hover { padding-right: 24px; background: var(--gold); color: var(--navy); }
        .floating-contact-trigger i { transform: rotate(90deg); font-size: 1.4rem; }

        /* SLIDE-IN DRAWER CONTACT FORM */
        .slide-drawer-overlay {
            position: fixed; inset: 0; background: rgba(11, 20, 50, 0.6);
            z-index: 999; display: none; opacity: 0;
            transition: opacity 0.3s ease;
        }
        .slide-drawer-overlay.active { display: block; opacity: 1; }
        
        .slide-drawer {
            position: fixed; top: 0; right: -460px; width: 420px; max-width: 100%;
            height: 100vh; background: #fff; box-shadow: -10px 0 30px rgba(0,0,0,0.15);
            z-index: 1000; transition: right 0.4s cubic-bezier(0.25, 1, 0.5, 1);
            padding: 30px; overflow-y: auto; display: flex; flex-direction: column;
        }
        .slide-drawer.active { right: 0; }
        .drawer-header {
            display: flex; justify-content: space-between; align-items: center;
            border-bottom: 2px solid var(--navy); padding-bottom: 15px; margin-bottom: 20px;
        }
        .drawer-header h3 { color: var(--navy); font-family: var(--font-head); font-size: 1.5rem; margin: 0; }
        .drawer-close {
            background: var(--navy); color: #fff; border: none; width: 32px; height: 32px;
            border-radius: 50%; cursor: pointer; font-size: 1rem; display: flex;
            align-items: center; justify-content: center; transition: 0.2s;
        }
        .drawer-close:hover { background: var(--gold); color: var(--navy); }
        .slide-drawer form { display: flex; flex-direction: column; gap: 14px; flex: 1; }
        .slide-drawer input, .slide-drawer select, .slide-drawer textarea {
            width: 100%; padding: 12px 16px; border: 1px solid var(--border-color);
            border-radius: var(--radius); font-family: var(--font-body); background: var(--bg-soft);
        }
        .slide-drawer input:focus, .slide-drawer select:focus, .slide-drawer textarea:focus {
            outline: none; border-color: var(--gold);
        }
        .slide-drawer label { font-weight: 600; font-size: 0.9rem; display: block; margin-bottom: 5px; color: var(--navy); }

        /* FIXED MODAL (Centered, Vertical Stack) */
        .modal-overlay {
            position: fixed; inset: 0; background: rgba(11, 20, 50, 0.75);
            display: none; align-items: center; justify-content: center;
            z-index: 10000;
            backdrop-filter: blur(4px); padding: 20px;
        }
        .modal-overlay.active { display: flex; }
        .modal-box {
            background: #fff; border-radius: var(--radius); max-width: 460px; width: 100%;
            padding: 40px 35px; text-align: center; box-shadow: 0 25px 60px rgba(0,0,0,0.4);
            position: relative; animation: modalFadeIn 0.3s ease-out; z-index: 10001;
        }
        @keyframes modalFadeIn { from { opacity: 0; transform: scale(0.95) translateY(20px); } to { opacity: 1; transform: scale(1) translateY(0); } }
        .modal-close {
            position: absolute; top: 15px; right: 15px; width: 32px; height: 32px;
            border: none; background: var(--bg-soft); border-radius: 50%; font-size: 1.2rem;
            color: #666; cursor: pointer; transition: 0.2s;
        }
        .modal-close:hover { background: #e0e0e0; color: #000; }
        
        .modal-box form { display: flex; flex-direction: column; width: 100%; align-items: stretch; gap: 14px; text-align: left; }
        .modal-box label { font-weight: 600; font-size: 0.9rem; display: block; margin-bottom: 5px; color: var(--navy); }
        .modal-box input, .modal-box textarea, .modal-box select {
            width: 100%; padding: 12px 16px; border: 1px solid var(--border-color);
            border-radius: var(--radius); background: var(--bg-soft); font-family: var(--font-body);
            box-sizing: border-box; display: block;
        }
        .modal-box input:focus, .modal-box textarea:focus, .modal-box select:focus { outline: none; border-color: var(--gold); }
        .modal-box h3 { font-family: var(--font-head); color: var(--navy); font-size: 1.5rem; margin-bottom: 6px; }
        .modal-box p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 24px; }

        /* Floating Contact Icons */
        .floating-contact-icons { position: fixed; bottom: 30px; left: 30px; z-index: 9999; display: flex; flex-direction: column; gap: 12px; }
        .floating-contact-btn { display: flex; align-items: center; justify-content: center; width: 54px; height: 54px; border-radius: 50%; background: #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.15); transition: all 0.3s ease; }
        .floating-contact-btn:hover { transform: scale(1.1); box-shadow: 0 6px 20px rgba(0,0,0,0.25); }
        .floating-contact-btn img { width: 128px; height: 128px; object-fit: contain; }

        /* Footer */
        footer { background: var(--navy-deep); color: rgba(255,255,255,0.6); padding: 40px 0; text-align: center; font-size: 0.8rem; border-top: 1px solid rgba(255,255,255,0.05); }
        footer a { color: rgba(255,255,255,0.6); margin: 0 10px; }
        footer a:hover { color: #fff; }

        /* ==========================================================
           ENHANCED RESPONSIVE QUERIES
           ========================================================== */
        @media (max-width: 1024px) {
            .hero-grid, .grid-2, .models-layout, .process-layout, .testimonials-grid { grid-template-columns: 1fr; }
            .services-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-grid { grid-template-columns: repeat(3, 1fr); gap: 15px; }
            .stat-item { border-right: none; border-bottom: 1px solid var(--border-color); padding-bottom: 15px; }
            .stat-item:nth-last-child(-n+2) { border-bottom: none; }
        }

        @media (max-width: 768px) {
            .header-inner { flex-direction: column; text-align: center; }
            .header-contact { flex-direction: column; gap: 8px; }
            .about-features { grid-template-columns: 1fr; }
            .stats-grid { grid-template-columns: repeat(2, 1fr); }
            .stat-item { border-bottom: 1px solid var(--border-color); padding-bottom: 12px; }
            .stat-item:nth-last-child(-n+2) { border-bottom: none; }
            .models-cards-container { padding: 20px; }
            .model-card h5 { font-size: 1.4rem; }
            .model-card p { max-width: 100%; }
            .partners-grid img { height: 25px; }
            .floating-contact-trigger { display: none; }
            .slide-drawer { width: 100%; right: -100%; }
            .slide-drawer.active { right: 0; }
            .process-steps { flex-direction: column; gap: 15px; padding: 0; }
            .process-steps::before { display: none; }
            .step { display: flex; align-items: center; gap: 15px; text-align: left; }
            .step-circle { margin: 0; width: 40px; height: 40px; font-size: 0.9rem; }
            .hero-left h1 { font-size: 1.6rem; }
            .hero-left h1 .highlight { display: inline-block; }
            .hero-btns { flex-direction: column; width: 100%; }
            .hero-btns .btn { justify-content: center; width: 100%; }
            .final-cta .btns { flex-direction: column; align-items: center; }
            .final-cta .btns .btn { width: 100%; max-width: 320px; justify-content: center; }
            .floating-contact-icons { bottom: 90px; left: 15px; gap: 10px; }
            .floating-contact-btn { width: 46px; height: 46px; }
            .floating-contact-btn img { width: 24px; height: 24px; }
            .cta-before-footer .orange-form-card { padding: 25px 20px; }
            .cta-benefits-list { margin-top: 10px; gap: 12px; }
            .top-header .brand-logo img { height: 70px; }
        }

        /* MOBILE: One book at a time */
        @media (max-width: 640px) {
            .container { padding: 0 16px; }
            .hero { padding: 40px 0; }
            .section { padding: 40px 0; }
            .books-gallery-section { padding: 40px 0; }
            
            
            .services-grid { grid-template-columns: 1fr; }
            .testimonials-grid { grid-template-columns: 1fr; }
            .stats-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
            .stat-item { border-bottom: 1px solid var(--border-color); padding-bottom: 10px; }
            .stat-item:nth-last-child(-n+2) { border-bottom: none; }
            .stat-item h4 { font-size: 1.4rem; }
            
            .form-card { padding: 20px; }
            .form-card .ribbon { font-size: 0.6rem; padding: 4px 12px; }
            
            .cta-before-footer { padding: 40px 0; }
            .cta-right-content h3 { font-size: 1.4rem; }
            
            .models-layout { grid-template-columns: 1fr; }
            .models-list { flex-direction: row; flex-wrap: wrap; gap: 4px; padding: 12px; }
            .models-list li { padding: 8px 14px; font-size: 0.8rem; flex: 1 0 auto; }
            .models-cards-container { min-height: 180px; padding: 20px; }
            .model-card h5 { font-size: 1.2rem; }
            .model-card p { font-size: 0.9rem; }
            
        }

        @media (max-width: 400px) {
            .hero-left h1 { font-size: 1.3rem; }
            .feature-item { font-size: 0.75rem; gap: 8px; }
            .feature-item i { font-size: 1rem; width: 24px; }
            .btn { padding: 10px 20px; font-size: 0.85rem; }
            .rating-badge { font-size: 0.7rem; padding: 6px 12px; }
            .stat-item h4 { font-size: 1.2rem; }
            .stat-item span { font-size: 0.7rem; }
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
    
</head>
<body>

    <!-- Header -->
    <header class="top-header">
        <div class="container header-inner">
            <a href="/" class="brand-logo">
                <img src="https://shakespearepublishinghouse.com/assets/images/logo.png" class="brand-logo" alt="The Shakespeare Publishing House">
            </a>
            <div class="header-contact">
                <div><i class="fas fa-envelope"></i> <a href="mailto:info@theshakespearepublishinghouse.com">info@theshakespearepublishinghouse.com</a></div>
                <div><i class="fas fa-phone-alt"></i> <a href="tel:+16463890212" style="font-weight:700;">+1 646 389 0212</a></div>
                <div><i class="fas fa-clock"></i> Mon - Fri, 9 AM - 6 PM</div>
            </div>
        </div>
    </header>

    <main>
        <!-- Top Banner -->
        <div class="top-banner">
            <i class="fas fa-clock" style="color: var(--gold);"></i> 
            <strong>LIMITED TIME OFFER:</strong> Get 50% OFF on all publishing packages &rarr; <strong style="text-decoration: underline; cursor: pointer;" onclick="openModal()">Claim your discount today!</strong>
        </div>

        <!-- HERO -->
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-left">
                    <h1>PROFESSIONAL AMAZON<br><span class="highlight">BOOK PUBLISHING</span><br>MADE SIMPLE</h1>
                    <p>
                        Publish Your Book on the World's Leading Bookstores<br>From editing and formatting to cover design, ISBN registration, and worldwide distribution—we handle everything while you retain full ownership of your work.</p>
                    <div class="features-grid">
                        <div class="feature-item"><i class="fas fa-pen-fancy"></i> Amazon KDP Publishing</div>
                        <div class="feature-item"><i class="fas fa-layer-group"></i> Paperback & Hardcover Publishing</div>
                        <div class="feature-item"><i class="fas fa-globe-americas"></i> Kindle & eBook Publishing</div>
                        <div class="feature-item"><i class="fas fa-bullhorn"></i> Global Distribution</div>
                        <div class="feature-item"><i class="fas fa-bullhorn"></i> 100% Author Ownership</div>
                    </div>
                    <div class="hero-btns">
                        <a href="#quote" class="btn btn-gold"><i class="fas fa-percent"></i> GET 50% OFF NOW</a>
                    </div>
                    <div class="rating-badge">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        Excellent &nbsp;|&nbsp; <strong>4.8/5</strong> (1,200+ Authors)
                    </div>
                </div>
                <div class="hero-right">
                    <div class="form-card" id="quote">
                        <div class="ribbon">CLAIM YOUR 50% DISCOUNT</div>
                        <h3><i class="fas fa-gem" style="color: var(--gold);"></i> Get Your Free Publishing Consultation</h3>
                        <p>Complete the form and our publishing experts will get back to you within 15 minutes.</p>
                        <form id="mainForm" action="process_form.php" method="POST">
                            <input type="hidden" name="page_url" class="page-url-field" />
                            <input type="text" name="name" placeholder="Full Name" required />
                            <input type="email" name="email" placeholder="Email Address" required />
                            <input type="tel" name="phone" placeholder="Phone Number" required />
                            <!--<input type="text" name="title" placeholder="Book Title (Optional)" />-->
                            <textarea name="message" rows="3" placeholder="Tell us about your manuscript..."></textarea>
                            <button type="submit" class="btn btn-gold btn-block"><i class="fas fa-arrow-right"></i> GET MY FREE QUOTE</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container stats-grid">
                <div class="stat-item"><h4><i class="fas fa-star"></i> 4+</h4><span>Years Experience</span></div>
                <div class="stat-item"><h4>1200+</h4><span>Books Published</span></div>
                <div class="stat-item"><h4>98%</h4><span>Client Satisfaction</span></div>
                <div class="stat-item"><h4>350+</h4><span>Global Partners</span></div>
                <div class="stat-item"><h4><i class="fas fa-headset"></i> 24/7</h4><span>Support</span></div>
            </div>
        </section>

        <!-- About Section -->
        <section class="section" id="about">
            <div class="container grid-2">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Reading on Tablet with Coffee" style="width:100%; height:auto; border-radius: var(--radius); box-shadow: var(--shadow-lg);">
                </div>
                <div class="about-content">
                    <h3>Turn Your Manuscript Into a Bestseller-Ready Book with The Shakespeare Publishing House</h3>
                    <p>We don't just publish books, we build them to sell. Our team of publishing strategists, editors, and designers handles every detail, from flawless formatting to data-driven marketing, so your book doesn't just reach readers, it converts them into fans.</p>
                    <p>Publishing isn't about printing pages. It's about engineering a product that competes and wins in a crowded market. That's why we pair award-worthy design with proven promotional strategy, giving your book the credibility, visibility, and staying power it deserves.</p>
                    <div class="about-features">
                        <div class="about-feat"><i class="fas fa-check"></i> <strong>E-Book Publication</strong></div>
                        <div class="about-feat"><i class="fas fa-check"></i> <strong>Video Book Trailers</strong></div>
                        <div class="about-feat"><i class="fas fa-check"></i> <strong>Audiobooks</strong></div>
                        <div class="about-feat"><i class="fas fa-check"></i> <strong>Branding & Publicity</strong></div>
                        <div class="about-feat"><i class="fas fa-check"></i> <strong>Web & SEO Services</strong></div>
                        <div class="about-feat"><i class="fas fa-check"></i> <strong>Custom Illustrations</strong></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="section section-soft" id="services">
            <div class="container">
                <div class="section-title"><h2>Make Your Book Stand Out With Our<br>Specialized Publishing Services!</h2><p>Whether you need professional editing, stunning cover design, or global distribution, we have you covered.</p></div>
                <div class="services-grid">
                    <div class="service-card"><i class="fas fa-paint-brush"></i><h4>High-Quality Book Covers</h4><p>Stunning, genre-appropriate covers that attract readers and build credibility.</p></div>
                    <div class="service-card"><i class="fas fa-file-alt"></i><h4>Custom Interior Formatting</h4><p>Professionally formatted interiors, aligned with industry standards.</p></div>
                    <div class="service-card"><i class="fas fa-edit"></i><h4>Professional Editing</h4><p>Meticulous edits that refine your manuscript to perfection.</p></div>
                    <div class="service-card"><i class="fas fa-print"></i><h4>Premium Printing Options</h4><p>Paperback, hardcover, glossy, matte, or embossed finishes.</p></div>
                    <div class="service-card"><i class="fas fa-pencil-ruler"></i><h4>Illustrations & Visuals</h4><p>Custom art and infographics for children's and educational books.</p></div>
                    <div class="service-card"><i class="fas fa-chart-line"></i><h4>Marketing & Promotion</h4><p>Strategic campaigns to boost visibility and drive sales.</p></div>
                </div>
            </div>
        </section>

        <!-- Clickable Publishing Models Tabs -->
        <section class="section models-section" id="packages">
            <div class="container">
                <div class="section-title"><h2>Experience The Best With Our Amazon Book Publishing Company</h2><p>We offer a variety of publishing models to suit your specific needs, budget, and timeline.</p></div>
                <div class="models-layout">
                    <ul class="models-list">
                        <li data-model="standard" class="active" onclick="showModel('standard')">Standard Publishing <i class="fas fa-arrow-right"></i></li>
                        <li data-model="self" onclick="showModel('self')">Self-Publishing <i class="fas fa-arrow-right"></i></li>
                        <li data-model="hybrid" onclick="showModel('hybrid')">Hybrid Publishing <i class="fas fa-arrow-right"></i></li>
                        <li data-model="ebook" onclick="showModel('ebook')">E-Book Publishing <i class="fas fa-arrow-right"></i></li>
                        <li data-model="specialized" onclick="showModel('specialized')">Specialized Publishing <i class="fas fa-arrow-right"></i></li>
                        <li data-model="pod" onclick="showModel('pod')">Print-On-Demand <i class="fas fa-arrow-right"></i></li>
                    </ul>
                    <div class="models-cards-container">
                        <div class="model-card active" data-model="standard">
                            <h5>Standard Publishing</h5>
                            <p>A traditional publishing approach where we handle everything from editing to marketing. We take care of the heavy lifting so you can focus on writing.</p>
                        </div>
                        <div class="model-card" data-model="self">
                            <h5>Self-Publishing</h5>
                            <p>Maintain full control over your book while we assist with production, formatting, and distribution. You keep 100% of your rights and royalties.</p>
                        </div>
                        <div class="model-card" data-model="hybrid">
                            <h5>Hybrid Publishing</h5>
                            <p>A combination of self-publishing and traditional publishing, giving you the best of both worlds. We share the costs and the profits, working together as partners.</p>
                        </div>
                        <div class="model-card" data-model="ebook">
                            <h5>E-Book Publishing</h5>
                            <p>Expand your digital reach and make your book available on Kindle, Nook, Apple Books, Google Play, and more. Instant global availability.</p>
                        </div>
                        <div class="model-card" data-model="specialized">
                            <h5>Specialized Publishing</h5>
                            <p>Niche publishing solutions for technical, business, educational, and research-based books tailored to academic and industry standards.</p>
                        </div>
                        <div class="model-card" data-model="pod">
                            <h5>Print-On-Demand</h5>
                            <p>Avoid inventory hassle — your book is printed only when a customer orders a copy. This minimizes cost and waste while ensuring your book is always available.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BOOK CAROUSEL - FIXED RESPONSIVE (1 book on mobile) -->
        <section class="books-gallery-section" id="books">
            <div class="container">
                <div class="books-header">
                    <span class="eyebrow">Featured Books</span>
                    <h2>Stories Crafted to Leave a Lasting Impression.</h2>
                    <p>Explore a selection of beautifully designed books across fiction, inspiration, romance, mystery, thriller, and faith-based storytelling.</p>
                </div>
                <div class="books-carousel-wrapper">
                    <button class="slider-btn square" onclick="slideBook(-1)"><i class="fas fa-arrow-left"></i></button>
                    <div class="books-track-container">
                        <div class="books-track" id="bookTrack">
                            <div class="book-item"><img src="https://shakespearepublishinghouse.com/assets/images/Mockup%204/2ws-removebg-preview.webp" alt="The Last Draft"></div>
                            <div class="book-item"><img src="https://shakespearepublishinghouse.com/assets/images/Mockup%204/33-removebg-preview.webp" alt="Her Gentle Rise"></div>
                            <div class="book-item"><img src="https://shakespearepublishinghouse.com/assets/images/Mockup%204/44-removebg-preview.webp" alt="The Quiet Comeback"></div>
                            <div class="book-item"><img src="https://shakespearepublishinghouse.com/assets/images/Mockup%204/66-removebg-preview.webp" alt="The Light of Galilee"></div>
                            <div class="book-item"><img src="https://shakespearepublishinghouse.com/assets/images/Mockup%204/88-removebg-preview.webp" alt="The Lavender Letters"></div>
                            <div class="book-item"><img src="https://shakespearepublishinghouse.com/assets/images/Mockup%204/99-removebg-preview.webp" alt="The Silent Trial"></div>
                            <div class="book-item"><img src="https://shakespearepublishinghouse.com/assets/images/Mockup%204/Mockup_4-removebg-preview.webp" alt="The Silent Trial"></div>
                            <div class="book-item"><img src="https://shakespearepublishinghouse.com/assets/images/Mockup%204/new-book.webp" alt="The Scone Cold Secret"></div>
                            <div class="book-item"><img src="https://shakespearepublishinghouse.com/assets/images/Mockup%204/new-book (2).png" alt="The Stolen Hour"></div>
                            <div class="book-item"><img src="assets/10-removebg-preview.webp" alt="The Stolen Hour"></div>
                        </div>
                    </div>
                    <button class="slider-btn square" onclick="slideBook(1)"><i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="books-carousel-controls">
                    <div class="slider-dots" id="sliderDots">
                        <span class="active" onclick="goToBook(0)"></span>
                        <span onclick="goToBook(1)"></span>
                        <span onclick="goToBook(2)"></span>
                        <span onclick="goToBook(3)"></span>
                        <span onclick="goToBook(4)"></span>
                        <span onclick="goToBook(5)"></span>
                        <span onclick="goToBook(6)"></span>
                        <span onclick="goToBook(7)"></span>
                        <span onclick="goToBook(8)"></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process -->
        <section class="section section-soft">
            <div class="container process-layout">
                <div>
                    <div class="section-title" style="text-align: left; margin-bottom: 20px;"><h2>AMAZON PUBLISHING PROCESS</h2><p>From manuscript submission to global sales, we make the journey smooth and rewarding.</p></div>
                    <div class="process-steps">
                        <div class="step"><div class="step-circle">1</div><h5>Manuscript<br>Submission</h5></div>
                        <div class="step"><div class="step-circle">2</div><h5>Editing &<br>Proofreading</h5></div>
                        <div class="step"><div class="step-circle">3</div><h5>Book Design &<br>Formatting</h5></div>
                        <div class="step"><div class="step-circle">4</div><h5>Publication &<br>Distribution</h5></div>
                        <div class="step"><div class="step-circle">5</div><h5>Marketing &<br>Promotion</h5></div>
                    </div>
                </div>
                <div class="process-cta">
                    <h3>WE HANDLE EVERYTHING<br><span style="color: var(--gold);">YOU FOCUS ON YOUR STORY!</span></h3>
                    <p>Leave the technicalities to us. We guide your book from manuscript to bestseller status.</p>
                    <a href="javascript:void(0)" onclick="openModal()" class="btn btn-gold"><i class="fas fa-arrow-right"></i> LET'S GET STARTED</a>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="section">
            <div class="container">
                <div class="section-title"><h2>What Our Authors Say</h2><p>Real stories from the authors we've had the privilege to work with.</p></div>
                <div class="trustindex-widget-box">
                    <script defer async src="https://cdn.trustindex.io/loader.js?174876a7508272492f96332f244"></script>
                    <noscript>[trustindex data-widget-id=174876a7508272492f96332f244]</noscript>
                </div>
            </div>
        </section>

        <!-- Partners Logos -->
        <section class="partners-section">
            <div class="container partners-grid">
                <img src="https://shakespearepublishinghouse.com/assets/images/carousel-logo/amazon.webp" alt="Amazon" />
                <img src="https://shakespearepublishinghouse.com/assets/images/carousel-logo/barnes.webp" alt="Barnes & Noble" />
                <img src="https://shakespearepublishinghouse.com/assets/images/carousel-logo/lulu.webp" alt="Apple Books" />
                <img src="https://shakespearepublishinghouse.com/assets/images/carousel-logo/apple.webp" alt="Google Play" />
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-before-footer">
            <div class="container">
                <div class="section-title center">
                    <h2>Bringing Your Book to Life with Professional Amazon Publishing Services</h2>
                    <p>Whether you're publishing your first book or expanding your author portfolio, our Amazon publishing specialists provide end-to-end services to help you professionally publish your book on Amazon Kindle Direct Publishing (KDP).</p>
                </div>
                <div class="grid-2">
                    <div class="orange-form-card">
                        <h3>Let's Work Together</h3>
                        <form id="beforeFooterForm" action="process_form.php" method="POST">
                            <input type="hidden" name="page_url" class="page-url-field" />
                            <label for="cta_name">Full Name</label>
                            <input type="text" id="cta_name" name="name" placeholder="John Doe" required />
                            <label for="cta_email">Email</label>
                            <input type="email" id="cta_email" name="email" placeholder="Example@Example.Com" required />
                            <label for="cta_phone">Contact Number</label>
                            <input type="tel" id="cta_phone" name="phone" placeholder="+1 (234)-567-890" required />
                            <label for="cta_message">Message</label>
                            <textarea id="cta_message" name="message" rows="3" placeholder="Text Here..."></textarea>
                            <button type="submit" class="btn-white">Claim Your Expert Consultation</button>
                        </form>
                    </div>
                    <div class="cta-right-content">
                        <h3>What Sets The Shakespeare Publishing House Apart?</h3>
                        <ul class="cta-benefits-list">
                            <li><span class="check-icon"><i class="fas fa-check-circle"></i></span><span class="li-text"><strong>Complete Amazon Publishing Solutions:</strong> From manuscript editing to Amazon KDP publishing, we manage every step.</span></li>
                            <li><span class="check-icon"><i class="fas fa-check-circle"></i></span><span class="li-text"><strong>Amazon KDP & Global Distribution:</strong> Publish on Amazon, Barnes & Noble, Apple Books, Kobo, and more.</span></li>
                            <li><span class="check-icon"><i class="fas fa-check-circle"></i></span><span class="li-text"><strong>Customized Publishing Packages:</strong> Choose from traditional, self-publishing, hybrid, and print-on-demand options.</span></li>
                            <li><span class="check-icon"><i class="fas fa-check-circle"></i></span><span class="li-text"><strong>High-Quality Editing & Design:</strong> Professional editors and designers enhance your manuscript.</span></li>
                            <li><span class="check-icon"><i class="fas fa-check-circle"></i></span><span class="li-text"><strong>Strategic Marketing & Promotion:</strong> SEO, social media campaigns, book trailers, and PR strategies.</span></li>
                            <li><span class="check-icon"><i class="fas fa-check-circle"></i></span><span class="li-text"><strong>Ongoing Author Support:</strong> Continuous support, sales tracking, and promotional assistance.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="final-cta" id="contact">
            <div class="container">
                <h2>DON'T JUST WRITE A BOOK.<br>LEAVE A LEGACY.</h2>
                <p>GET 50% OFF NOW & PUBLISH YOUR MASTERPIECE</p>
                <div class="btns">
                    <a href="#quote" class="btn btn-gold"><i class="fas fa-percent"></i> GET MY 50% DISCOUNT NOW</a>
                    <a href="javascript:void(0)" onclick="openZendeskChatWidget()" class="btn btn-outline-light"><i class="fas fa-headset"></i> BOOK FREE CONSULTATION</a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer><div class="container"><p>&copy; 2026 The Shakespeare Publishing House. All rights reserved.</p><a href="https://theshakespearepublishinghouse.com/Terms-and-conditions.php">Terms and Conditions</a><a href="https://theshakespearepublishinghouse.com/Privacy-Policy.php">Privacy Policy</a></div></footer>
    </main>

    <!-- Floating Contact Tab -->
    <div class="floating-contact-trigger" onclick="openContactDrawer()">
        <i class="fas fa-comment-dots"></i> Contact Us
    </div>
    <div class="slide-drawer-overlay" id="slideDrawerOverlay" onclick="closeContactDrawer()"></div>
    <div class="slide-drawer" id="slideDrawer">
        <div class="drawer-header">
            <h3>Contact Form</h3>
            <button class="drawer-close" onclick="closeContactDrawer()"><i class="fas fa-times"></i></button>
        </div>
        <p style="color:var(--text-muted); margin-bottom: 20px;">Fill out the form and we'll get back to you shortly.</p>
        <form id="contactForm" action="process_form.php" method="POST">
            <input type="hidden" name="page_url" class="page-url-field" />
            <input type="text" name="name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Your Email" required />
            <label for="query_type">Query Type</label>
            <select name="query_type" id="query_type">
                <option value="General Query">General Query</option>
                <option value="Publishing Services">Publishing Services</option>
                <option value="Editing Help">Editing Help</option>
                <option value="Technical Support">Technical Support</option>
            </select>
            <textarea name="message" rows="4" placeholder="Message" required></textarea>
            <button type="submit" class="btn btn-gold btn-block">Send Message</button>
        </form>
    </div>

    <!-- Modal -->
    <!--<div class="modal-overlay" id="modalOverlay">-->
    <!--    <div class="modal-box">-->
    <!--        <button class="modal-close" onclick="closeModal()">✕</button>-->
    <!--        <h3><i class="fas fa-gem" style="color: var(--gold); margin-right: 8px;"></i> Book Your Free Consultation</h3>-->
    <!--        <p>Ready to publish your masterpiece? Fill out the form below and our expert team will get back to you within 15 minutes.</p>-->
    <!--        <form id="modalForm" action="process_form.php" method="POST">-->
    <!--            <input type="hidden" name="page_url" class="page-url-field" />-->
    <!--            <input type="text" name="name" placeholder="Full Name" required />-->
    <!--            <input type="email" name="email" placeholder="Email Address" required />-->
    <!--            <input type="tel" name="phone" placeholder="Phone Number" />-->
    <!--            <textarea name="message" rows="3" placeholder="Tell us about your manuscript and goals..."></textarea>-->
    <!--            <button type="submit" class="btn btn-gold btn-block"><i class="fas fa-paper-plane"></i> REQUEST A CALLBACK</button>-->
    <!--        </form>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- Floating WhatsApp -->
    <div class="floating-contact-icons">
        <a class="floating-contact-btn" href="https://wa.me/16462580616" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
            <img src="https://shakespearepublishinghouse.com/assets/images/whatsapp.png" alt="WhatsApp">
        </a>
    </div>
    
    
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
    <!-- End of Zendesk Widget script --> 

    <script>
        // --- Publishing Models Tabs ---
        function showModel(modelId) {
            document.querySelectorAll('.models-list li').forEach(li => li.classList.remove('active'));
            const menuItem = document.querySelector(`.models-list li[data-model="${modelId}"]`);
            if (menuItem) menuItem.classList.add('active');

            document.querySelectorAll('.models-cards-container .model-card').forEach(card => card.classList.remove('active'));
            const targetCard = document.querySelector(`.models-cards-container .model-card[data-model="${modelId}"]`);
            if (targetCard) targetCard.classList.add('active');
        }

        // --- Modal ---
        function openModal() {
            const modalOverlay = document.getElementById('modalOverlay');
            if (modalOverlay) modalOverlay.classList.add('active');
        }
        function closeModal() {
            const modalOverlay = document.getElementById('modalOverlay');
            if (modalOverlay) modalOverlay.classList.remove('active');
        }
        const modalOverlay = document.getElementById('modalOverlay');
        if (modalOverlay) {
            modalOverlay.addEventListener('click', function(e) { if (e.target === this) closeModal(); });
        }

        // --- Drawer ---
        function openContactDrawer() {
            document.getElementById('slideDrawerOverlay').classList.add('active');
            document.getElementById('slideDrawer').classList.add('active');
        }
        function closeContactDrawer() {
            document.getElementById('slideDrawerOverlay').classList.remove('active');
            document.getElementById('slideDrawer').classList.remove('active');
        }

        // --- Auto load modal ---
        setTimeout(() => { openModal(); }, 6000);

        // --- FEATURED BOOKS CAROUSEL: TRUE INFINITE LOOP + MOBILE SWIPE ---
        const track = document.getElementById('bookTrack');
        const carouselWrapper = document.querySelector('.books-carousel-wrapper');
        const dots = Array.from(document.querySelectorAll('#sliderDots span'));

        let originalBooks = Array.from(track.querySelectorAll('.book-item:not(.clone)'));
        const realItems = originalBooks.length;
        let cloneCount = 1;
        let currentIndex = 0;      // index including clones
        let currentRealIndex = 0;  // 0..realItems-1
        let isTransitioning = false;
        let autoplayTimer = null;
        let resizeTimer = null;
        let unlockTimer = null;
        const AUTOPLAY_DELAY = 2600;
        const TRANSITION_MS = 550;

        function getVisibleCount() {
            if (window.innerWidth <= 640) return 1;
            if (window.innerWidth <= 1024) return 2;
            return 3;
        }

        function normalizeRealIndex(index) {
            return ((index % realItems) + realItems) % realItems;
        }

        function updateDots() {
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentRealIndex);
                dot.setAttribute('aria-current', index === currentRealIndex ? 'true' : 'false');
            });
        }

        function setTrackPosition(animate = true) {
            const items = track.querySelectorAll('.book-item');
            const target = items[currentIndex];
            if (!target) return;

            track.style.transition = animate
                ? `transform ${TRANSITION_MS}ms cubic-bezier(0.25, 1, 0.5, 1)`
                : 'none';

            // offsetLeft is measured from the beginning of the track, so it
            // stays accurate even when responsive gaps / widths change.
            const offset = target.offsetLeft;
            track.style.transform = `translate3d(-${offset}px, 0, 0)`;
        }

        function removeClones() {
            track.querySelectorAll('.book-item.clone').forEach(item => item.remove());
        }

        function buildClones(preserveRealIndex = 0) {
            pauseAutoplay();
            isTransitioning = false;
            clearTimeout(unlockTimer);
            removeClones();

            originalBooks = Array.from(track.querySelectorAll('.book-item:not(.clone)'));
            cloneCount = Math.min(getVisibleCount(), realItems);
            currentRealIndex = normalizeRealIndex(preserveRealIndex);

            const before = document.createDocumentFragment();
            originalBooks.slice(-cloneCount).forEach(book => {
                const clone = book.cloneNode(true);
                clone.classList.add('clone');
                clone.setAttribute('aria-hidden', 'true');
                before.appendChild(clone);
            });
            track.insertBefore(before, track.firstChild);

            const after = document.createDocumentFragment();
            originalBooks.slice(0, cloneCount).forEach(book => {
                const clone = book.cloneNode(true);
                clone.classList.add('clone');
                clone.setAttribute('aria-hidden', 'true');
                after.appendChild(clone);
            });
            track.appendChild(after);

            currentIndex = cloneCount + currentRealIndex;
            requestAnimationFrame(() => {
                setTrackPosition(false);
                updateDots();
                // Force layout while transition is disabled so the next move animates cleanly.
                void track.offsetHeight;
                startAutoplay();
            });
        }

        function finishLoopIfNeeded() {
            // Crossed the right clone: snap invisibly to the matching real item.
            if (currentIndex >= cloneCount + realItems) {
                currentIndex = cloneCount;
                setTrackPosition(false);
                void track.offsetHeight;
            }

            // Crossed the left clone: snap invisibly to the matching real item.
            if (currentIndex < cloneCount) {
                currentIndex = cloneCount + realItems - 1;
                setTrackPosition(false);
                void track.offsetHeight;
            }

            isTransitioning = false;
            clearTimeout(unlockTimer);
            startAutoplay();
        }

        function slideBook(direction) {
            if (isTransitioning || !realItems) return;

            pauseAutoplay();
            isTransitioning = true;
            currentIndex += direction;
            currentRealIndex = normalizeRealIndex(currentRealIndex + direction);
            updateDots();
            setTrackPosition(true);

            // Fallback in case a browser doesn't emit transitionend.
            clearTimeout(unlockTimer);
            unlockTimer = setTimeout(finishLoopIfNeeded, TRANSITION_MS + 100);
        }

        function goToBook(index) {
            if (isTransitioning || index < 0 || index >= realItems) return;
            pauseAutoplay();
            isTransitioning = true;
            currentRealIndex = index;
            currentIndex = cloneCount + index;
            updateDots();
            setTrackPosition(true);
            clearTimeout(unlockTimer);
            unlockTimer = setTimeout(() => {
                isTransitioning = false;
                startAutoplay();
            }, TRANSITION_MS + 100);
        }

        function startAutoplay() {
            pauseAutoplay();
            autoplayTimer = setTimeout(() => slideBook(1), AUTOPLAY_DELAY);
        }

        function pauseAutoplay() {
            if (autoplayTimer) {
                clearTimeout(autoplayTimer);
                autoplayTimer = null;
            }
        }

        track.addEventListener('transitionend', (event) => {
            if (event.propertyName === 'transform' && isTransitioning) {
                finishLoopIfNeeded();
            }
        });

        // Desktop pause-on-hover.
        carouselWrapper.addEventListener('mouseenter', pauseAutoplay);
        carouselWrapper.addEventListener('mouseleave', startAutoplay);

        // Mobile swipe support without blocking vertical page scrolling.
        let touchStartX = 0;
        let touchStartY = 0;
        carouselWrapper.addEventListener('touchstart', (event) => {
            if (!event.touches.length) return;
            pauseAutoplay();
            touchStartX = event.touches[0].clientX;
            touchStartY = event.touches[0].clientY;
        }, { passive: true });

        carouselWrapper.addEventListener('touchend', (event) => {
            if (!event.changedTouches.length) {
                startAutoplay();
                return;
            }
            const dx = event.changedTouches[0].clientX - touchStartX;
            const dy = event.changedTouches[0].clientY - touchStartY;

            if (Math.abs(dx) > 35 && Math.abs(dx) > Math.abs(dy)) {
                slideBook(dx < 0 ? 1 : -1);
            } else {
                startAutoplay();
            }
        }, { passive: true });

        // Rebuild only when the responsive visible-book count changes, while
        // keeping the same real book selected.
        let lastVisibleCount = getVisibleCount();
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                const nextVisibleCount = getVisibleCount();
                if (nextVisibleCount !== lastVisibleCount) {
                    lastVisibleCount = nextVisibleCount;
                    buildClones(currentRealIndex);
                } else {
                    setTrackPosition(false);
                }
            }, 180);
        });

        document.addEventListener('visibilitychange', () => {
            if (document.hidden) pauseAutoplay();
            else startAutoplay();
        });

        function initCarousel() {
            buildClones(0);
        }

        window.addEventListener('load', initCarousel);

        

        // --- AJAX Form Submission ---
        function handleFormSubmit(formId) {
            const form = document.getElementById(formId);
            if (!form) return;

            const pageUrlField = form.querySelector('.page-url-field');
            if (pageUrlField) pageUrlField.value = window.location.href;

            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                if (pageUrlField) pageUrlField.value = window.location.href;
                const formData = new FormData(this);
                try {
                    const response = await fetch(this.action, { method: 'POST', body: formData });
                    const text = (await response.text()).trim();
                    if (response.ok && text === 'success') {
                        window.location.assign(new URL('thankyou.php', window.location.href).href);
                    }
                    else { alert("Error submitting. Please email info@theshakespearepublishinghouse.com"); }
                } catch (error) { alert("Network error. Please email info@theshakespearepublishinghouse.com"); }
            });
        }

        handleFormSubmit('mainForm');
        handleFormSubmit('modalForm');
        handleFormSubmit('beforeFooterForm');
        handleFormSubmit('contactForm');
    </script>
</body>
</html>