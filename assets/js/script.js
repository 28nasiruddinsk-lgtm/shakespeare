const navToggle = document.querySelector('.nav-toggle');
const mainNav = document.querySelector('.main-nav');

if (navToggle && mainNav) {
  navToggle.addEventListener('click', () => {
    const isOpen = mainNav.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', String(isOpen));
    navToggle.textContent = isOpen ? '×' : '☰';
  });

  mainNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      mainNav.classList.remove('open');
      navToggle.setAttribute('aria-expanded', 'false');
      navToggle.textContent = '☰';
    });
  });
}

const revealItems = document.querySelectorAll('.section-intro, .feature-item, .service-card, .process-step, .review-card, .placeholder');
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) entry.target.classList.add('is-visible');
  });
}, { threshold: 0.12 });

revealItems.forEach((item) => {
  item.style.opacity = '0';
  item.style.transform = 'translateY(18px)';
  item.style.transition = 'opacity .55s ease, transform .55s ease';
  observer.observe(item);
});

document.addEventListener('animationstart', () => {});
const style = document.createElement('style');
style.textContent = `.is-visible{opacity:1!important;transform:translateY(0)!important}`;
document.head.appendChild(style);


// slider
document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".reviews-swiper")) {
    new Swiper(".reviews-swiper", {
      loop: true,
      speed: 700,
      spaceBetween: 24,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".reviews-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".reviews-next",
        prevEl: ".reviews-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 1,
        },
        1100: {
          slidesPerView: 1,
        },
      },
    });
  }
});
// FAQ accordion
const faqCards = document.querySelectorAll('.faq-card');

faqCards.forEach((card, index) => {
  const button = card.querySelector('button');
  const answer = card.querySelector('p');
  const icon = button ? button.querySelector('span') : null;

  if (!button || !answer) return;

  const isOpen = index === 0;
  card.classList.toggle('is-open', isOpen);
  button.setAttribute('aria-expanded', String(isOpen));
  if (icon) icon.textContent = isOpen ? '-' : '+';

  button.addEventListener('click', () => {
    const shouldOpen = !card.classList.contains('is-open');

    faqCards.forEach((item) => {
      const itemButton = item.querySelector('button');
      const itemIcon = itemButton ? itemButton.querySelector('span') : null;
      item.classList.remove('is-open');
      if (itemButton) itemButton.setAttribute('aria-expanded', 'false');
      if (itemIcon) itemIcon.textContent = '+';
    });

    if (shouldOpen) {
      card.classList.add('is-open');
      button.setAttribute('aria-expanded', 'true');
      if (icon) icon.textContent = '-';
    }
  });
});
// Video testimonial carousel and lightbox
const videoLightbox = document.querySelector('.video-lightbox');
const videoFrame = videoLightbox ? videoLightbox.querySelector('iframe') : null;
const videoTriggers = document.querySelectorAll('.video-testimonial-card');
const videoClosers = document.querySelectorAll('[data-video-close]');

if (typeof Swiper !== 'undefined' && document.querySelector('.video-testimonials-swiper')) {
  new Swiper('.video-testimonials-swiper', {
    loop: true,
    speed: 700,
    spaceBetween: 22,
    slidesPerView: 2,
    autoplay: {
      delay: 3200,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.video-next',
      prevEl: '.video-prev',
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      860: { slidesPerView: 2 },
    },
  });
}

const openVideoLightbox = (url) => {
  if (!videoLightbox || !videoFrame || !url) return;
  const separator = url.includes('?') ? '&' : '?';
  videoFrame.src = `${url}${separator}autoplay=1&rel=0`;
  videoLightbox.classList.add('is-open');
  videoLightbox.setAttribute('aria-hidden', 'false');
  document.body.classList.add('video-open');
};

const closeVideoLightbox = () => {
  if (!videoLightbox || !videoFrame) return;
  videoLightbox.classList.remove('is-open');
  videoLightbox.setAttribute('aria-hidden', 'true');
  document.body.classList.remove('video-open');
  videoFrame.src = '';
};

document.addEventListener('click', (event) => {
  const trigger = event.target.closest('.video-testimonial-card');
  if (!trigger) return;
  openVideoLightbox(trigger.dataset.youtubeUrl);
});

videoClosers.forEach((closer) => {
  closer.addEventListener('click', closeVideoLightbox);
});

document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape' && videoLightbox && videoLightbox.classList.contains('is-open')) {
    closeVideoLightbox();
  }
});
// Floating Zendesk chat trigger
const zendeskChatButtons = document.querySelectorAll('.floating-messenger, .chat, .chatt');

const openZendeskChat = () => {
  if (typeof zE === 'function') {
    try {
      zE('messenger', 'open');
      return;
    } catch (error) {}

    try {
      zE.activate();
      return;
    } catch (error) {}
  }

  if (window.$zopim && $zopim.livechat && $zopim.livechat.window) {
    $zopim.livechat.window.show();
  }
};

zendeskChatButtons.forEach((button) => {
  button.addEventListener('click', (event) => {
    event.preventDefault();
    openZendeskChat();
  });
});
// Services carousel
if (typeof Swiper !== 'undefined' && document.querySelector('.services-swiper')) {
  new Swiper('.services-swiper', {
    loop: true,
    speed: 700,
    spaceBetween: 28,
    slidesPerView: 3,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.services-next',
      prevEl: '.services-prev',
    },
    pagination: {
      el: '.services-pagination',
      clickable: true,
    },
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 18 },
      768: { slidesPerView: 2, spaceBetween: 22 },
      1100: { slidesPerView: 3, spaceBetween: 28 },
    },
  });
}

// Shared website form submission
const siteForms = document.querySelectorAll('.js-site-form');

siteForms.forEach((form) => {
  const status = form.querySelector('.form-status');
  const submitButton = form.querySelector('[type="submit"], button:not([type])');

  form.addEventListener('submit', async (event) => {
    event.preventDefault();

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    const originalText = submitButton ? submitButton.textContent : '';
    if (submitButton) {
      submitButton.disabled = true;
      submitButton.textContent = 'Sending...';
    }
    if (status) {
      status.className = 'form-status';
      status.textContent = 'Sending your request...';
    }

    try {
      const response = await fetch(form.action || 'submit-form.php', {
        method: 'POST',
        body: new FormData(form),
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
      });
      const result = await response.json();

      if (!response.ok || !result.ok) {
        throw new Error(result.message || 'Something went wrong. Please try again.');
      }

      form.reset();
      if (status) {
        status.className = 'form-status is-success';
        status.textContent = result.message || 'Thank you. Your request has been received.';
      }
    } catch (error) {
      if (status) {
        status.className = 'form-status is-error';
        status.textContent = error.message || 'Please call us at +1 646 258 0616.';
      }
    } finally {
      if (submitButton) {
        submitButton.disabled = false;
        submitButton.textContent = originalText;
      }
    }
  });
});


// book carousel

document.addEventListener("DOMContentLoaded", function () {
  if (typeof Swiper !== "undefined" && document.querySelector(".book-showcase-swiper")) {
    new Swiper(".book-showcase-swiper", {
      loop: true,
      speed: 700,
      spaceBetween: 28,
      slidesPerView: 4,
      centeredSlides: false,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: ".book-next",
        prevEl: ".book-prev"
      },
      pagination: {
        el: ".book-pagination",
        clickable: true
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 18
        },
        576: {
          slidesPerView: 2,
          spaceBetween: 22
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 26
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 28
        }
      }
    });
  }
});
