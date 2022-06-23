var gProjects = []

function createProject(id, name, title, desc, url, urlCode, labels, publishedAt = Date.now()) {
    return {
        id,
        name,
        title,
        desc,
        url,
        urlCode,
        publishedAt,
        labels,

    }
}
createProjects()
console.log(gProjects);

function createProjects() {
    gProjects.push(createProject('pacman', 'pacman', 'pacman Game', 'Try to win without getting Killed by the Ghosts - The game pacman like the original game with secret doors and dangerous ghosts Try It And See The Code',
        'https://eligranat.github.io/Pacman_Game/', 'https://github.com/EliGranat/Pacman_Game', ['JavaScript 76.7%', 'CSS 14.4%', 'HTML 8.9%'], '2021-09-07'))

    gProjects.push(createProject('Minesweeper', 'Minesweeper', 'Minesweeper Game', 'Try to win without getting Killed by bombs <br> Minesweeper rules are very simple. The board is divided into cells, with mines randomly distributed. To win, you need to open all the cells. Cells suspected of being mines can be marked with a flag using the right mouse button.',
        'https://eligranat.github.io/Game-Mines-Weeper/', 'https://github.com/EliGranat/Game-Mines-Weeper', ['JavaScript 84.9%', 'CSS 11.3%', 'HTML 3.8%'], '2021-09-03'))

    gProjects.push(createProject('TouchTheNumbers', 'Touch The Nums', 'Touch The Nums Game', ' Touch the numbers from 1 to 25 as fast as you can, and become a world record holder! <br> "Touch the Numbers" is a simple game for training your reflexes and peripheral vision.',
        'https://eligranat.github.io/Board_Touch_Nums/', 'https://github.com/EliGranat/Board_Touch_Nums', ['JavaScript 46.9%', 'CSS 37.2%', 'HTML 15.9%'], '2021-09-03'))

    gProjects.push(createProject('book-shop', 'Book Shop', ' the best books', 'my book shop support: <br> 3 languages: english spanish and hebrew.<br> 2 types of users: admin and customer. <br> admin can add, update , delete books, and the customer can buy books and rate them.<br> the site contain shoping cart that can calculat total amount of the books.',
        'https://eligranat.github.io/myBookShop/', 'https://github.com/EliGranat/myBookShop', ['JavaScript 47.2%', 'CSS 36.8%', 'HTML 16.0%'], '2021-09-03'))

    gProjects.push(createProject('Ball_Game', 'Ball  Game', ' Ball_Game', 'Catch The Ball is a fun game .<br> To win you have to catch all the balls and clean the board.<br> Be careful from the sticky glue it \'s will make you freeze for 7 seconds... GOODLUCK',
        'https://eligranat.github.io/Ball_Game/', 'https://github.com/EliGranat/Ball_Game', ['JavaScript 77.1%', 'CSS 13.3%', 'HTML 9.6%'], '2021-09-03'))

    gProjects.push(createProject('Blogin', 'Blogin', ' Blog Life Style', 'work with designer',
        'https://eligranat.github.io/myBlogLifeStyle/', 'https://github.com/EliGranat/myBlogLifeStyle', ['JavaScript 1%', 'CSS 61.4%', 'HTML 37.6%'], '2021-10-24'))

    gProjects.push(createProject('Portfolio', 'Portfolio', 'Portfolio', 'Show My Works',
        'https://eligranat.github.io/portfolio/', 'https://github.com/EliGranat/portfolio', ['JavaScript 16.8%', 'CSS 49.9%', 'HTML 33.3%'], '2021-10-24'))

    gProjects.push(createProject('canvas', 'Canvas And Touch', 'Create amazing pictures  ', 'My work with canvas in css and touch screen and events',
        'https://eligranat.github.io/canvasAndTouch/', 'https://github.com/EliGranat/canvasAndTouch', ['JavaScript 68.7%', 'CSS 9.4%', 'HTML 21.9%'], '2021-10-27'))

    gProjects.push(createProject('memes', 'Memes On Canvas', 'Create amazing Memes And Share  ', 'My Amazing work with canvas in css and touch screen responsive with any device',
        'https://eligranat.github.io/CreateMeme/', 'https://github.com/EliGranat/CreateMeme', ['JavaScript 39.0%', 'CSS  43.2%', 'HTML 17.8%'], '2021-10-29'))


}




function gettProjects() {
    return gProjects
}

function gettProject(idx) {
    return gProjects[idx]
}