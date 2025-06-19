menu = document.querySelector('.menu').children;
for (i = 0; i < menu.length; i++) {
    menu[i].addEventListener('click', function (event) {
        console.log(event.target.innerText);
    })
}



// function show(param){
//     list = document.getElementsByTagName('li').children;
//     if (param == 'Computer Science & Engineering'){
//         alert('Studying in Daffodil International University');
//     } else if (param == 'Political Science') {
//         alert('Studying in Youtube!');
//     } else {
//         alert('From Books');
//     }
// }


const listItems = document.getElementsByTagName('li');

for (let i = 0; i < listItems.length; i++) {
    listItems[i].addEventListener('click', function () {
        // Remove 'large' class from all other list items
        for (let j = 0; j < listItems.length; j++) {
            listItems[j].classList.remove('large');
        }
        // Add 'large' class to the clicked item
        this.classList.add('large');
    });
}
