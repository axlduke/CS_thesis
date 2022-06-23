"use strict";

var tabs = document.querySelectorAll('[data-tab-target]');
var tabContents = document.querySelectorAll('[data-tab-content]');
tabs.forEach(function (tab) {
  tab.addEventListener('click', function () {
    var target = document.querySelector(tab.dataset.tabTarget);
    tabContents.forEach(function (tabContent) {
      tabContent.classList.remove('active');
    });
    tabs.forEach(function (tab) {
      tab.classList.remove('active');
    });
    tab.classList.add('active');
    target.classList.add('active');
  });
});