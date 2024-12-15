<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Loop Example</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const imageUrls = [
                @foreach($popup as $popup)
                    "{{ asset('uploads/' . $popup->image) }}",
                @endforeach
            ];

            const screenWidth = window.innerWidth;
            let popupWidth = '40%';

            if (screenWidth <= 768) {
                popupWidth = '90%';
            }

            let currentPopup = 0;

            function showPopup() {
                if (currentPopup >= imageUrls.length) {
                    return;
                }

                Swal.fire({
                    imageUrl: imageUrls[currentPopup] || '',
                    imageWidth: '90%',
                    imageHeight: 'auto',
                    confirmButtonText: "Close",
                    confirmButtonColor: '#0000FF', // Background color for the close button (green)

                    imageAlt: "Popup Image",
                    showCloseButton: true, // Show the default close button
                    closeButtonHtml: '<button style="color: black; background: none; border: none; font-size: 24px;">&times;</button>', // Custom close button
                    width: popupWidth,
                    customClass: {
                        image: 'mobile-image-size',
                        popup: 'mobile-popup-size',
                        title: 'mobile-title-size',
                        text: 'mobile-content-size',
                        actions: 'mobile-actions-size'
                    }
                }).then(() => {
                    currentPopup++;
                    showPopup(); // Continue to next popup
                });
            }

            showPopup();
        });
    </script>
</body>
</html>
