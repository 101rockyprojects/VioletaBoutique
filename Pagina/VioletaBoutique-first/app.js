const modalBow = document.querySelector('#moño')
const viewBow =  document.querySelector('#container')
let bows = [
  {
    title: "Rosa",
    imgURL: './img/moños/moño.jpg',
    category: 'Infantiles',
    price:'1200',
    id: 0
  },
  {
    title: "Rosa",
    imgURL: './img/moños/moño2.png',
    category: 'Infantiles',
    price:'1800',
    id: 1
  },
  {
    title: "Rosa",
    imgURL: './img/moños/moño3.jpg',
    category: 'Infantiles',
    price:'800',
    id: 2
  },
  {
    title: "Azul",
    imgURL: './img/moños/moñoh.jpg',
    category: 'Mujer',
    price:'1400',
    id: 3
  },
  {
    title: "Gris",
    imgURL: './img/moños/moñoh2.jpg',
    category: 'Hombre',
    price:'1000',
    id: 4
  },
  {
    title: "Azul",
    imgURL: './img/moños/moñoh3.jpg',
    category: 'Hombre',
    price:'1200',
    id: 5
  },
  {
    title: "Verde",
    imgURL: './img/moños/moñom.jpg',
    category: 'Mujer',
    price:'2000',
    id: 6
  },
  {
    title: "Morado",
    imgURL: './img/moños/moñom2.jpg',
    category: 'Mujer',
    price:'1700',
    id: 7
  },
  {
    title: "Amarillo",
    imgURL: './img/moños/moñom3.jpg',
    category: 'Mujer',
    price:'1500',
    id: 8
  }
]

const imgDefault = './img/moños/default.jpg';

//filter
function componentBow(bow){
  const {imgURL, title, id, category, price} = bow
  return `
   <div id="${id}" class="bow column accesorio">
    <div class="badge"><i class="fa fa-trash-can"></i></div>
    <div id="${id}">
      <img src="${bow.imgURL || imgDefault }">
        <label>$${price}</label>
      <p>${title}</p>
    </div>
   </div>
  `
}

function modalContentBowComponent(bow){
  return `
    <div id="id02">
    <a id="modal__exit" class="closebtn">×</a>
      <div> 
        <h2 class="title">${bow.title}</h2>
        <ul class="card-action-buttons">
          <li class="fav"><i onclick="myFavs(this)" class="fas fa-heart"></i></li>
          <li class="car"><i class="fas fa-shopping-cart"></i></li>
        </ul>
        <img class="principal" src="${bow.imgURL || imgDefault}" alt="${bow.price}">
          <br><br><br>
          <p class="desctext">Tanto estilo a solo $${bow.price}</p>
          <div class="chips">
            <div style="width: 95%; margin: auto;">
                <div class="chip">${bow.category}</div>
        </div>
      </div>
    </div>
  `
}

function displayNotFound(){
  viewBow.innerHTML = `
  <div class="not-found">
    <p>Lo sentimos, aún tenemos moños en esa categoría...</p>
  </div>
  `
  //   <br><br>
  //   <span class="not-foundlogin">!!! Sé el primero en crearlo !!!</span><i class="fa fa-plus addbtn" onclick="document.getElementById('account').style.display='block'"></i>
}

function displayBows(bowsArr){
  const bowsHTMl = bowsArr.map(bow => componentBow(bow)).join('');
  viewBow.innerHTML = bowsHTMl;
}

displayBows(bows);

document.addEventListener('click', (event)=>{
  const target = event.target
  if(target.closest('.badge')){
    const selectedBow = target.closest('.bow')
    bows = bows.filter(bow => Number(bow.id) !== Number(selectedBow.id));
    displayBows(bows);
    alert("Moño eliminado exitosamente :)");
  }
  else if(target.closest('.bow')){  
    const selectedBow = target.closest('.bow')
    const myBow = bows.find(bow => Number(bow.id) === Number(selectedBow.id))
    const bowHTML = modalContentBowComponent(myBow);
    modalBow.innerHTML = bowHTML;
    modalBow.showModal();
  }
  if(target.closest('#modal__exit')){
    modalBow.close();inputNombre
  }
  if(target.closest('.btn_ctg')){
    const btn = target.closest('.btn_ctg')
    const filterValue = btn.textContent;
    document.querySelector('#filterTag').textContent = btn.textContent;
    const filteredBows = filterValue === 'Todos' ? bows : bows.filter((bow)=> bow.category === filterValue)
    filteredBows.length !== 0 ? displayBows(filteredBows) : displayNotFound();
  }
  if(target.matches('#contact-submit')){
    const form = target.closest('#add-bow');
    const title = form.querySelector('#input-nombre');
    const precio = form.querySelector('#input-precio');
    // const img = form.querySelector('#input-img');
    const categoria = document.getElementById('input-categoria');
    let categoria_text = categoria.options[categoria.selectedIndex].value;
    const newBow = {title: title.value, price: precio.value, category: categoria_text, id: bows.length};
    bows = [...bows, newBow];
    displayBows(bows);
    alert("Moño agregado exitosamente :)");
  }
  
})


// function addMoño() {
//   let moño = formCreate();
//   bows.push(moño);
// }

// function formCreate(){
//   document.querySelector('.formcreate')
//     .addEventListener('submit', e => {
//       e.preventDefault()
//       const data = Object.fromEntries(
//         new FormData(e.target)
//       )
//       alert(JSON.stringify(data))
//     })
//   return data;
// }