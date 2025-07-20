import * as bootstrap from 'bootstrap'; 
window.bootstrap = bootstrap;

document.addEventListener('DOMContentLoaded', function () {
    const saveItemBtn = document.querySelector('#saveItemBtn');

    if (saveItemBtn) {
        saveItemBtn.addEventListener('click', function () {
            const title = document.querySelector('#itemTitle').value.trim();

            if (title) {
                fetch('/items', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({ title }),
                }).then(response => {
                    if (response.ok) {
                        location.reload();
                    } else {
                        alert('Failed to add item.');
                    }
                });

                // Hide the modal using Bootstrap's JS API
                const modalEl = document.getElementById('addItemModal');
                const modalInstance = bootstrap.Modal.getInstance(modalEl);
                modalInstance.hide();

                document.querySelector('#itemTitle').value = '';
            } else {
                alert('Please enter a title for the item.');
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        slotMinTime: '7:00:00',
        slotMaxTime: '21:00:00',
        // events: @json($events),
    });
    
    calendar.render();
});

// document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');

//     var calendar = new FullCalendar.Calendar(calendarEl, {
//         initialView: 'dayGridMonth'
//     });

//     calendar.render();
// });