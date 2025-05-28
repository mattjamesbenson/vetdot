import * as bootstrap from 'bootstrap'; 
window.bootstrap = bootstrap;

document.addEventListener('DOMContentLoaded', function () {
    const addItemBtn = document.querySelector('#addItemBtn');
    if (addItemBtn) {
        addItemBtn.addEventListener('click', function () {
            const modal = new bootstrap.Modal(document.getElementById('addItemModal'));
            modal.show();
        });
    }

    const saveItemBtn = document.querySelector('#saveItemBtn');
    if (saveItemBtn) {
        saveItemBtn.addEventListener('click', function () {
            const title = document.querySelector('#itemTitle').value.trim();
            if (title) {
                fetch('/items', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ title })
                }).then(response => {
                    if (response.ok) {
                        location.reload();
                    } else {
                        alert('Failed to add item.');
                    }
                });

                const modal = bootstrap.Modal.getInstance(document.getElementById('addItemModal'));
                modal.hide();
                document.querySelector('#itemTitle').value = '';
            } else {
                alert("Please enter a title for the item.");
            }
        });
    }
});
