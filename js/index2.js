const select = document.querySelector('select')
const descriptions = document.querySelectorAll('.type-switcher')
const button = document.querySelector('button')
let inputs = document.querySelectorAll('input')

function addDescription(index) {
  descriptions[index - 1].classList.remove('none')
  let labels = descriptions[index - 1].children
  for (let label of labels) {
    let input = label.children
    input[0].setAttribute('required', true)
  }
}
function deleteDescription() {
  descriptions.forEach((el) => {
    el.classList.add('none')
    let labels = el.children
    for (let label of labels) {
      let input = label.children
      if (input[0].hasAttribute('required')) {
        input[0].removeAttribute('required')
      }
    }
  })
}
function validation() {
  for (let input of inputs) {
		input.removeAttribute(
			'oninvalid'
		)
		if (!input.value) {
			input.setAttribute(
				'oninvalid',
				"this.setCustomValidity('Please, submit required data')"
			)
		} else {
			input.setAttribute(
				'oninvalid',
				"this.setCustomValidity('Please, provide the data of indicated type')"
			)
		}
    if (!input.hasAttribute("oninput")) {
			input.setAttribute('oninput', "setCustomValidity('')")
		}
  }
}

validation()

select.addEventListener('input', () => {
  let index = select.options.selectedIndex
  deleteDescription()
  addDescription(index)
})

inputs.forEach(el => {
	el.addEventListener("input", validation)
})
