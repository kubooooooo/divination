'use strict'

{
    const card = document.getElementsByClassName('card');
    for(let i = 0; i < 5; i++){
        cardAction(card[i],i);
    }

    function cardAction(cardDOM,cardId) {
        cardDOM.addEventListener('click', () => {
            cardDOM.classList.toggle('selected');
            for(let i = 0; i < 5; i++) {
                if(cardId !== i){
                    if(card[i].classList.contains('selected')){
                        card[i].classList.remove('selected');
                    }
                }
            }
        });
    }
}
