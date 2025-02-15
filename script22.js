
        const decrementBtn = document.querySelector('.smallbtns:first-of-type');
        const incrementBtn = document.querySelector('.smallbtns:last-of-type');
        const textbox = document.querySelector('.textbox');

        // Event listener for decrement button
        decrementBtn.addEventListener('click', () => {
            let currentValue = parseInt(textbox.textContent.trim(), 10);
            textbox.textContent = currentValue - 1;
        });

        // Event listener for increment button
        incrementBtn.addEventListener('click', () => {
            let currentValue = parseInt(textbox.textContent.trim(), 10);
            textbox.textContent = currentValue + 1;
        });
        // Function to show the popup
        function showPopup() {
            document.getElementById('popupOverlay').style.display = 'block';
            document.getElementById('popupBox').style.display = 'block';
        }

        // Function to hide the popup
        function hidePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            document.getElementById('popupBox').style.display = 'none';
        }

        // Event listener for the close button
        document.getElementById('closePopup').addEventListener('click', hidePopup);

        // Example: Show the popup when the form is submitted
        document.getElementById('payNow').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent form submission for demonstration
            showPopup();
        });
        function showsidebar(){//onclick on the three lines sidebar open
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
        }
        function hidesidebar(){//onclick on the cross reture back
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
        }
    