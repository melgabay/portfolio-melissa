console.log('Starting up');
$(init)

function init() {
    randerPortfolio()
    $(' .btn-send-mail').click(onSendMsg)

}

function randerPortfolio() {
    var projects = gettProjects()
    var elProtoHTML = projects.map((project, idx) => {
        return `<div class="col-md-4 col-sm-6 portfolio-item">
    <a class="portfolio-link" data-toggle="modal" onclick="onOpenModalProto(${idx})" href="#portfolioModal">
        <div class="portfolio-hover">
        <div class="portfolio-hover-content">
        <i class="fa fa-plus fa-3x"></i>
        </div>
    </div>
        <img class="img-fluid" src="img/portfolio/${project.id}.png" alt="${'change'}">
    </a>
    <div class="portfolio-caption">
        <h4>${project.name}</h4>
        <p class="text-muted">${project.title}</p>
    </div>
    </div> `
    })

    $('.container-portfolio-item').html(elProtoHTML)
}

function randerModalShow(idx) {
    var projects = gettProject(idx)
    var elModalContainer = `  
    <h2>${projects.name}</h2>
    <p class="item-intro text-muted">${projects.title}.</p>
    <img class="img-fluid d-block mx-auto" src="img/portfolio/${projects.id}.png" alt="">
    <p>${projects.desc}</p>

   <a href="${projects.url}" target='_blank'><img src="./img/btn-play.svg"></a>
   <a href="${projects.urlCode}" target='_blank'><img src="./img/btn-code.svg"></a>
    <div>
    <span class="badge badge-danger">${projects.labels[0]}</span>
    <span class="badge badge-warning">${projects.labels[1]}</span>
    <span class="badge badge-info">${projects.labels[2]}</span>
    </div>

    <ul class="list-inline">
        <li>Date: ${projects.publishedAt}</li>
    </ul> `

    $('.container-details-show-modal').html(elModalContainer)
}

function onOpenModalProto(idx) {
    randerModalShow(idx)
    console.log(idx);
}

function onSendMsg() {
    var mailUser = $('.mail-user').val()
    var subjectUser = $('.subject-user').val()
    var msgUser = $('.body-msg-user').val()

    window.open(`https://mail.google.com/mail/?view=cm&fs=1&to= granat1710@gmail.com&su=${subjectUser} &body=${mailUser +" : "+ msgUser}`)
}