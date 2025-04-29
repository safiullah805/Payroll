var SweetAlert = function () {
    // Sweet Alerts
    var _componentSweetAlert = function() {
        if (typeof swal == 'undefined') {
            console.warn('Warning - sweet_alert.min.js is not loaded.');
            return;
        }

        // Defaults
        var setCustomDefaults = function() {
            swal.setDefaults({
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-light'
            });
        }
        setCustomDefaults();

    }
    //
    // Return objects assigned to module
    //
    
    return {
        initComponents: function() {
            _componentSweetAlert();
        }
    }
}();

// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {    
    SweetAlert.initComponents();
});

function deleteSwal(route, data) {
    swal({
        title: 'Are you sure?',
        text: 'Employee will be marked as deleted',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (!result.dismiss) {
            fetch(route, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (!response.ok) {
                    return response.text().then(text => {
                        console.error("Server error:", text);
                        throw new Error("Server returned error response");
                    });
                }
                return response.json();
            })
            .then(result => {
                if (result.redirect) {
                    window.location.href = result.redirect;
                } else {
                    console.warn("Redirect URL not found in response.");
                }
            })
            .catch(error => {
                console.error("Fetch error:", error);
                swal({
                    title: 'Error!',
                    text: 'There was an issue deleting the item.',
                    type: 'error',
                    confirmButtonText: 'Okay'
                });
            });
        }
    });
}