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
            const pdfUrls = [
                "{{ asset('images/ShareApplicationFormDarchulaPower.pdf') }}"
            ];

            const imageUrls = [
                @foreach ($popup as $popup)
                    "{{ asset('uploads/' . $popup->image) }}",
                @endforeach
            ];

            const screenWidth = window.innerWidth;
            let popupWidth = screenWidth <= 768 ? '90%' : '40%';

            let currentPopup = 0;
            let showingPDFs = true;

            function showPopup() {
                let urls = showingPDFs ? pdfUrls : imageUrls;

                if (currentPopup >= urls.length) {
                    if (showingPDFs) {
                        showingPDFs = false; // Switch to images
                        currentPopup = 0;
                        showPopup();
                    }
                    return;
                }

                let currentUrl = urls[currentPopup] || '';

                if (showingPDFs) {
                    // Handle PDF viewing & download
                    Swal.fire({
                        title: "View or Download PDF",
                        html: `<iframe src="${currentUrl}" width="100%" height="500px"></iframe>
                           <br><a href="${currentUrl}" download class="swal2-confirm swal2-styled" style="background-color: #0000FF;">Download PDF</a>`,
                        width: popupWidth,
                        showCloseButton: true,
                        confirmButtonText: "Next",
                        confirmButtonColor: '#0000FF'
                    }).then(() => {
                        currentPopup++;
                        showPopup();
                    });
                } else {
                    // Handle Images
                    Swal.fire({
                        imageUrl: currentUrl,
                        imageWidth: '90%',
                        imageHeight: 'auto',
                        confirmButtonText: "Next",
                        confirmButtonColor: '#0000FF',
                        imageAlt: "Popup Image",
                        showCloseButton: true,
                        width: popupWidth
                    }).then(() => {
                        currentPopup++;
                        showPopup();
                    });
                }
            }

            showPopup();
        });
    </script>
</body>

</html>
