/**
 * JavaScript for the Result Page
 */

document.addEventListener('DOMContentLoaded', function() {
    const downloadBtn = document.getElementById('download-btn');
    const shareBtn = document.getElementById('share-btn');
    const image = document.querySelector('.generated-image');
    
    // Handle image load
    if (image) {
        image.addEventListener('load', function() {
            // Add loaded class for animation
            image.classList.add('loaded');
        });
        
        // Add error handler
        image.addEventListener('error', function() {
            // Handle image loading error
            const imageContainer = document.getElementById('image-result');
            if (imageContainer) {
                imageContainer.innerHTML = `
                    <div class="error-message">
                        <p>Failed to load image</p>
                    </div>
                `;
            }
        });
    }
    
    // Handle share button functionality
    if (shareBtn) {
        shareBtn.addEventListener('click', function() {
            const shareURL = window.location.origin + '/'; // Ensures only the domain with trailing slash
    
            if (navigator.share) {
                navigator.share({
                    title: 'Check out this AI-generated image!',
                    text: 'AI-generated image from Image Generator',
                    url: shareURL
                }).catch(error => {
                    console.error('Error sharing:', error);
                });
            } else {
                // Fallback: copy domain to clipboard
                navigator.clipboard.writeText(shareURL).then(function() {
                    const toast = document.createElement('div');
                    toast.className = 'toast-notification';
                    toast.textContent = 'Homepage URL copied to clipboard!';
                    document.body.appendChild(toast);
                    
                    setTimeout(() => {
                        toast.classList.add('fade-out');
                        setTimeout(() => {
                            document.body.removeChild(toast);
                        }, 300);
                    }, 3000);
                });
            }
        });
    }
    
    
    // Mobile detection for download fallback
    if (downloadBtn) {
        // Check if it's iOS (which has issues with the download attribute)
        const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        
        if (isIOS) {
            downloadBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                // For iOS, open image in new tab
                window.open(downloadBtn.href, '_blank');
            });
        }
    }
    
    // Add styles for the toast notification
    const style = document.createElement('style');
    style.textContent = `
        .toast-notification {
            position: fixed;
            bottom: 24px;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--color-text);
            color: white;
            padding: 12px 24px;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 1000;
            animation: toast-in 0.3s ease forwards;
        }
        
        .toast-notification.fade-out {
            animation: toast-out 0.3s ease forwards;
        }
        
        @keyframes toast-in {
            from { transform: translate(-50%, 20px); opacity: 0; }
            to { transform: translate(-50%, 0); opacity: 1; }
        }
        
        @keyframes toast-out {
            from { transform: translate(-50%, 0); opacity: 1; }
            to { transform: translate(-50%, 20px); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
});