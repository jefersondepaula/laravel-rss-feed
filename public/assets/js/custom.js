
window.addEventListener('load', () =>{

    let posts = document.querySelectorAll('#post');

    posts.forEach((el, item)=>{
        el.addEventListener('click', (evt) => {
            let btn = el.querySelector('a');
            if(evt.altKey){
                btn.style.display = 'block';
                setTimeout(() => {
                    btn.style.opacity =  '1';
                }, 200);

            } else {
                btn.style.opacity =  '0';
                setTimeout(() => {
                    btn.style.display = 'none';
                }, 200);
            }
        });
    })
})




