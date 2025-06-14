/**
 * Main JavaScript for the Image Generator
 */


 
document.querySelector('.menu-toggle').addEventListener('click', function() {
  document.querySelector('.main-nav').classList.toggle('open');
});
 


document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('imageGeneratorForm');
    const generateBtn = document.getElementById('generateBtn');
    const loadingOverlay = document.getElementById('loading-overlay');
    const exampleCards = document.querySelectorAll('.example-card');
    const promptInput = document.getElementById('prompt');
    
    // Form submission
    if (form) {
        form.addEventListener('submit', function(e) {
            // Show loading overlay
            loadingOverlay.classList.add('active');
            
            // Let the form submit naturally to result.php
            // The loading overlay will stay visible during the page transition
        });
    }
    
    // Example cards click handler
    exampleCards.forEach(card => {
        card.addEventListener('click', function() {
            const prompt = this.getAttribute('data-prompt');
            if (promptInput && prompt) {
                promptInput.value = prompt;
                promptInput.focus();
                
                // Scroll to form
                const formContainer = document.querySelector('.form-container');
                if (formContainer) {
                    formContainer.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
    
    // Prevent FOUC (Flash of Unstyled Content)
    document.body.classList.add('js-loaded');
    
    // Add visual feedback to buttons
    const buttons = document.querySelectorAll('button, .download-btn, .back-btn');
    buttons.forEach(button => {
        button.addEventListener('mousedown', function() {
            this.style.transform = 'scale(0.98)';
        });
        
        button.addEventListener('mouseup', function() {
            this.style.transform = 'scale(1)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Dynamically adjust textarea height
    if (promptInput) {
        const adjustHeight = () => {
            promptInput.style.height = 'auto';
            promptInput.style.height = `${promptInput.scrollHeight}px`;
        };
        
        promptInput.addEventListener('input', adjustHeight);
        window.addEventListener('resize', adjustHeight);
    }
    
    // Add validation to form
    if (form) {
        form.querySelectorAll('input, textarea, select').forEach(field => {
            field.addEventListener('invalid', function() {
                field.classList.add('error');
            });
            
            field.addEventListener('input', function() {
                field.classList.remove('error');
            });
        });
    }
});