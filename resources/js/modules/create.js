document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form[action="/slots"]');
  const list = document.getElementById('slots__list');
  const meta = document.querySelector('meta[name="csrf-token"]');
  const csrfToken = meta ? meta.getAttribute('content') : null;

  if (!form || !csrfToken) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    try {
      const response = await fetch('/slots', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': csrfToken,
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      });

      if (!response.ok) throw new Error('Ошибка при добавлении слота');

      const newSlot = await response.json();

      // Простой рендер нового элемента
      const li = document.createElement('li');
      li.className = 'slots__item';
      li.id = `slot-${newSlot.id}`;
      li.innerHTML = `
        <a class="slots__link" href="${newSlot.slug}">
          <img class="slots__img" src="${newSlot.image_url}" alt="${newSlot.name}">
          <p class="slots__number">новый</p>
        </a>
        <button class="slots__btn_delete" data-id="${newSlot.id}" data-name="${newSlot.name}">Удалить</button>
      `;

      list.appendChild(li);
      form.reset();
    } catch (error) {
      alert('Ошибка при отправке формы');
      console.error(error);
    }
  });
});