document.addEventListener('DOMContentLoaded', () => {
  const meta = document.querySelector('meta[name="csrf-token"]');
  const csrfToken = meta ? meta.getAttribute('content') : null;

  if (!csrfToken) {
    console.error('CSRF token not found');
    return;
  }

  document.querySelectorAll('.slots__btn_delete').forEach(button => {
    button.addEventListener('click', () => {
      const slotId = button.dataset.id;
      const slotName = button.dataset.name;

      if (!confirm(`Удалить слот "${slotName}"?`)) return;

      fetch(`/slots/${slotId}`, {
        method: 'DELETE',
        headers: {
          'X-CSRF-TOKEN': csrfToken,
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        }
      })
      .then(response => {
        if (!response.ok) throw new Error('Ошибка сети');
        return response.json();
      })
      .then(data => {
        if (data.success) {
          const slotElement = document.getElementById(`slot-${slotId}`);
          if (slotElement) slotElement.remove();
        } else {
          alert('Ошибка при удалении слота');
        }
      })
      .catch(() => alert('Ошибка при выполнении запроса'));
    });
  });
});