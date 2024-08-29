<script>
        let bookedCount = 0;
        const capacity = 100;

        function bookTicket() {
            if (bookedCount < capacity) {
                const confirmation = document.getElementById("confirmation");

                // Create a confirmation message
                const message = document.createElement("p");
                message.textContent = Ticket booked successfully! Type: ${ticketType};
                confirmation.appendChild(message);

                // Update booked count
                bookedCount++;

                // Check if all slots are booked
                if (bookedCount === capacity) {
                    const fullMessage = document.createElement("p");
                    fullMessage.textContent = "All slots are fully booked.";
                    confirmation.appendChild(fullMessage);

                    // Disable the button if all slots are booked
                    document.querySelector("button").disabled = true;
                }
            } else {
                alert("All slots are fully booked.");
            }
        }
    </script>