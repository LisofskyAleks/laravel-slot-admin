// document.addEventListener('DOMContentLoaded', () => {
//   const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

//   document.querySelectorAll('.delete-slot-btn').forEach(button => {
//     button.addEventListener('click', () => {
//       const slotId = button.dataset.id;

//       fetch(`/slots/${slotId}`, {
//         method: 'DELETE',
//         headers: {
//           'X-CSRF-TOKEN': csrfToken,
//           'Accept': 'application/json',
//           'Content-Type': 'application/json',
//         },
//       })
//       .then(response => {
//         if (!response.ok) throw new Error('Ошибка сети');
//         return response.json();
//       })
//       .then(data => {
//         if (data.success) {
//           const slotElement = document.getElementById(`slot-${slotId}`);
//           if (slotElement) slotElement.remove();
//         } else {
//           alert('Ошибка при удалении слота');
//         }
//       })
//       .catch(() => alert('Ошибка при выполнении запроса'));
//     });
//   });
// });
