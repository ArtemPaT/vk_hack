let bob = document.querySelectorAll('.bob');
		let main = document.querySelector('.main');
		let plusmon = document.querySelector('.plusmon');
		let minmon = document.querySelector('.minmon');
		let text = document.querySelectorAll('.text');
		bob[0].onclick = function() {
			main.style.display = 'block';
			plusmon.style.display = 'none';
			minmon.style.display = 'none';
			text[0].classList.add('text-vk');
			text[1].classList.remove('text-vk');
			text[2].classList.remove('text-vk');
			text[0].classList.remove('text-vk2');
			text[1].classList.add('text-vk2');
			text[2].classList.add('text-vk2');
		}
		bob[1].onclick = function() {
			main.style.display = 'none';
			plusmon.style.display = 'block';
			minmon.style.display = 'none';
			text[0].classList.remove('text-vk');
			text[1].classList.add('text-vk');
			text[2].classList.remove('text-vk');
			text[0].classList.add('text-vk2');
			text[1].classList.remove('text-vk2');
			text[2].classList.add('text-vk2');
		}
		bob[2].onclick = function() {
			main.style.display = 'none';
			plusmon.style.display = 'none';
			minmon.style.display = 'block';
			text[0].classList.remove('text-vk');
			text[1].classList.remove('text-vk');
			text[2].classList.add('text-vk');
			text[0].classList.add('text-vk2');
			text[1].classList.add('text-vk2');
			text[2].classList.remove('text-vk2');
		}