const selectors = {
    boardContainer: document.querySelector('.board-container'),
    board: document.querySelector('.board'),
    moves: document.querySelector('.moves'),
    timer: document.querySelector('.timer'),
    start: document.querySelector('button'),
    win: document.querySelector('.win')
}

const state = {
    gameStarted: false,
    flippedCards: 0,
    totalFlips: 0,
    totalTime: 0,
    loop: null
}

const shuffle = array => {
    const clonedArray = [...array]

    for (let i = clonedArray.length - 1; i > 0; i--) {
        const randomIndex = Math.floor(Math.random() * (i + 1))
        const original = clonedArray[i]

        clonedArray[i] = clonedArray[randomIndex]
        clonedArray[randomIndex] = original
    }

    return clonedArray
}

const pickRandom = (array, items) => {
    const clonedArray = [...array]
    const randomPicks = []

    for (let i = 0; i < items; i++) {
        const randomIndex = Math.floor(Math.random() * clonedArray.length)
        
        randomPicks.push(clonedArray[randomIndex])
        clonedArray.splice(randomIndex, 1)
    }

    return randomPicks
}

const generateGame = () => {
    const dimensions = selectors.board.getAttribute('data-dimension')  

    if (dimensions % 2 !== 0) {
        throw new Error("The dimension of the board must be an even number.")
    }

    const img = ['antasari.jpg', 'sultanan.jpg', 'sabilal.jpg', 'pasar.jpg', 'mesjid.jpg', 'tari.jpg', 'siring.jpg', 'barito.jpg', 'sungai.jpg', 'candi.jpg'];
    const picks = pickRandom(img, (dimensions * dimensions) / 2);
    const items = shuffle([...picks, ...picks]);
    const cards = `
        <div class="board" style="grid-template-columns: repeat(${dimensions}, auto)">
            ${items.map(item => `
                <div class="card">
                    <div class="card-front"></div>
                    <div class="card-back"><img src="/memory/images/${item}" onerror="this.src='/images/placeholder.jpg'"></div>

                </div>
            `).join('')}
       </div>
    `;
    
    const parser = new DOMParser().parseFromString(cards, 'text/html');
    
    selectors.board.replaceWith(parser.querySelector('.board'));
}    


const startGame = () => {
    state.gameStarted = true
    selectors.start.classList.add('disabled')

    state.loop = setInterval(() => {
        state.totalTime++

        selectors.moves.innerText = `${state.totalFlips} moves`
        selectors.timer.innerText = `Time: ${state.totalTime} sec`
    }, 1000)
}

const flipBackCards = () => {
    document.querySelectorAll('.card:not(.matched)').forEach(card => {
        card.classList.remove('flipped')
    })

    state.flippedCards = 0
}

const flipCard = card => {
    state.flippedCards++;
    state.totalFlips++;
  
    if (!state.gameStarted) {
      startGame();
    }
  
    if (state.flippedCards <= 2) {
      card.classList.add('flipped');
    }
  
    if (state.flippedCards === 2) {
      const flippedCards = document.querySelectorAll('.flipped:not(.matched)');
      const card1 = flippedCards[0];
      const card2 = flippedCards[1];
  
      const img1 = card1.querySelector('.card-back img');
      const img2 = card2.querySelector('.card-back img');
  
      if (img1.src === img2.src) {
        card1.classList.add('matched');
        card2.classList.add('matched');
      }
  
      setTimeout(() => {
        flipBackCards();
      }, 1000);
    }
  
    if (!document.querySelectorAll('.card:not(.flipped)').length) {
      setTimeout(() => {
        selectors.boardContainer.classList.add('flipped');
        selectors.win.innerHTML = `
          <span class="win-text">
            You won!<br />
            with <span class="highlight">${state.totalFlips}</span> moves<br />
            under <span class="highlight">${state.totalTime}</span> seconds
          </span>
        `;
  
        clearInterval(state.loop);
      }, 1000);
    }
  };
  

const attachEventListeners = () => {
    document.addEventListener('click', event => {
        const eventTarget = event.target
        const eventParent = eventTarget.parentElement

        if (eventTarget.className.includes('card') && !eventParent.className.includes('flipped')) {
            flipCard(eventParent)
        } else if (eventTarget.nodeName === 'BUTTON' && !eventTarget.className.includes('disabled')) {
            startGame()
        }
    })
}

generateGame()
attachEventListeners()