"use strict";console.log("Hello there, hows it going?");var btnHamburger=document.querySelector("#btnHamburger"),body=document.querySelector("body"),header=document.querySelector(".header"),overlay=document.querySelector(".overlay"),mobileMenu=document.querySelector(".mobileMenu"),nav__list=document.querySelector(".nav__list"),nav__item=document.querySelector(".nav__item"),faders=document.querySelectorAll(".fadeIn");btnHamburger.addEventListener("click",(function(){console.log("click hamburger"),header.classList.contains("open")?(body.classList.remove("noscroll"),header.classList.remove("open"),overlay.classList.remove("fade-in"),overlay.classList.add("fade-out"),nav__list.classList.remove("fade-in"),mobileMenu.classList.remove("nav-open"),mobileMenu.classList.add("hide-for-mobile"),nav__item.classList.remove("nav__item--open")):(console.log("else menu"),body.classList.add("noscroll"),header.classList.add("open"),overlay.classList.add("fade-in"),overlay.classList.remove("fade-out"),nav__list.classList.add("fade-in"),mobileMenu.classList.add("nav-open"),mobileMenu.classList.remove("hide-for-mobile"),nav__item.classList.add("nav__item--open"))}));var appearOptions={threshold:1,rootMargin:"0px 0px -100px 0px"},appearOnScroll=new IntersectionObserver((function(e,o){e.forEach((function(e){e.isIntersecting&&(e.target.classList.add("appear"),appearOnScroll.unobserve(e.target))}))}),appearOptions);faders.forEach((function(e){appearOnScroll.observe(e)}));
//# sourceMappingURL=script.js.map