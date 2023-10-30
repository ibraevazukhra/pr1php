// alert('message');
// let password = prompt('введите пароль');
// password = Number(password);
// console.log(password);

// // confirm('Вы уверены?')

// let sure = confirm('Вы уверены?')
// console.log(sure);
// alert('text' + password + 'text2')

let count = prompt('Введите стоимость товара');
let money = prompt('Введите кол-во денег клиента');

if(count == money){
    let done = document.querySelector('.done')
    done.textContent = 'Покупка совершена'
}else{
    if(count > money){
    let a = count - money;
    let aa = document.querySelector('.aa')
    aa.textContent = 'Для покупки не хватает ' + a + ' р.'
    }else{
    let b = money - count;
    let bb = document.querySelector('.bb')
    bb.textContent = 'Покупка совершена. Сдача ' + b + ' р.'
    }
}

let css = document.querySelector('.block');
css.style.background = '#ffcb74';
css.style.height = '80px';
css.style.width = '200px';
css.style.textAlign = 'center';
css.style.position = 'absolute';
css.style.right = '40%';
css.style.padding = '20px';


// let aad ='Покупка совершена'
// let boxA = '<div class="box">'+aa+'</div>'
// let for_boxA = document.querySelector('.for_boxA')
// for_boxA.innerHTML = box

// let logo = document.querySelector('.logo');
// console.log(logo)

// console.log(document.querySelectorAll('.link'));
// let email = document.getElementById('email');
// console.log(email);

// ---------Изменение CSS-------------
// logo.style.background = 'red';
// logo.style.borderRadius = '10px';
// links[1].style.color = 'black'

// console.log(email.value)
// email.value = 'adddd';
// console.log(email.value)

// let textarea = Document.getElementById('textarea')
// textarea.textContent = 'adadfsdf'

// let text = Document.querySelector('.text')
// text.textContent = 'hjkhfjk'

// let text2 ='dmbhjnmko'
// let box = '<div class="box">'+text2+'</div>'
// let for_box = document.querySelector('.for_box')
// for_box.innerHTML = box