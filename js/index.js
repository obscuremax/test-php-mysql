const btnDelete = document.querySelector('.delete')
const input = document.querySelectorAll('input')
let arrIndexInputChecked = []

function getIndexInputChecked() {
  arrIndexInputChecked = []
  input.forEach((el) => {
    if (el.checked) {
			let id = +el.id.slice(0, -1)
      arrIndexInputChecked.push(id)
      let [...num] = arrIndexInputChecked
      let href = `vendor/delete-card.php?id=${num}`
      btnDelete.setAttribute('href', href)
    } else if (arrIndexInputChecked.length === 0) {
			btnDelete.setAttribute('href', "")
		} 
  })
}

input.forEach((el) => {
  el.addEventListener('input', () => {
    getIndexInputChecked()
  })
})

btnDelete.addEventListener('click', (e) => {
	if (btnDelete.getAttribute("href") == "") {
		e.preventDefault()
	}
})
