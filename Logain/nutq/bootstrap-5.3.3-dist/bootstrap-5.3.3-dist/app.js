// app.js
$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault();
        
        const userData = {
            name: $('#name').val(),
            email: $('#email').val(),
            problem: $('#problem').val()
        };
        function myFunction(x) {
            x.classList.toggle("change");
          }

        $.post('/register', userData, function(response) {
            if(response.success) {
                alert('Registration successful!');
            } else {
                alert('Registration failed. Please try again.');
            }
        });
    });

    function loadLawyers() {
        $.get('/lawyers', function(lawyers) {
            lawyers.forEach(lawyer => {
                const lawyerCard = `
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">${lawyer.name}</h5>
                                <p class="card-text">${lawyer.specialty}</p>
                                <button class="btn btn-primary">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                `;
                $('#lawyerList').append(lawyerCard);
            });
        });
    }

    loadLawyers();
});
