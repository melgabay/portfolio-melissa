"use strict";

console.log('Starting up');
$(init);

function init() {
  randerPortfolio();
  $(' .btn-send-mail').click(onSendMsg);
}

function randerPortfolio() {
  var projects = gettProjects();
  var elProtoHTML = projects.map(function (project, idx) {
    return "<div class=\"col-md-4 col-sm-6 portfolio-item\">\n    <a class=\"portfolio-link\" data-toggle=\"modal\" onclick=\"onOpenModalProto(".concat(idx, ")\" href=\"#portfolioModal\">\n        <div class=\"portfolio-hover\">\n        <div class=\"portfolio-hover-content\">\n        <i class=\"fa fa-plus fa-3x\"></i>\n        </div>\n    </div>\n        <img class=\"img-fluid\" src=\"img/portfolio/").concat(project.id, ".png\" alt=\"", 'change', "\">\n    </a>\n    <div class=\"portfolio-caption\">\n        <h4>").concat(project.name, "</h4>\n        <p class=\"text-muted\">").concat(project.title, "</p>\n    </div>\n    </div> ");
  });
  $('.container-portfolio-item').html(elProtoHTML);
}

function randerModalShow(idx) {
  var projects = gettProject(idx);
  var elModalContainer = "  \n    <h2>".concat(projects.name, "</h2>\n    <p class=\"item-intro text-muted\">").concat(projects.title, ".</p>\n    <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/").concat(projects.id, ".png\" alt=\"\">\n    <p>").concat(projects.desc, "</p>\n\n   <a href=\"").concat(projects.url, "\" target='_blank'><img src=\"./img/btn-play.svg\"></a>\n   <a href=\"").concat(projects.urlCode, "\" target='_blank'><img src=\"./img/btn-code.svg\"></a>\n    <div>\n    <span class=\"badge badge-danger\">").concat(projects.labels[0], "</span>\n    <span class=\"badge badge-warning\">").concat(projects.labels[1], "</span>\n    <span class=\"badge badge-info\">").concat(projects.labels[2], "</span>\n    </div>\n\n    <ul class=\"list-inline\">\n        <li>Date: ").concat(projects.publishedAt, "</li>\n    </ul> ");
  $('.container-details-show-modal').html(elModalContainer);
}

function onOpenModalProto(idx) {
  randerModalShow(idx);
  console.log(idx);
}

function onSendMsg() {
  var mailUser = $('.mail-user').val();
  var subjectUser = $('.subject-user').val();
  var msgUser = $('.body-msg-user').val();
  window.open("https://mail.google.com/mail/?view=cm&fs=1&to= granat1710@gmail.com&su=".concat(subjectUser, " &body=").concat(mailUser + " : " + msgUser));
}