const sideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

sideMenu.forEach(element => {
    const li = element.parentElement;

    element.addEventListener('click', function(){
        
        sideMenu.forEach(i=> {
            i.parentElement.classList.remove('active');
        })

        li.classList.add('active');  

    })
});
