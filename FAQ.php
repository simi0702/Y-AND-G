<!DOCTYPE html>
<html lang="en">
 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ | Tooth and Gum Clinic</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Gilda+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
 
        .faq-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            text-align: left;
            position: relative;
        }
 
        .faq-container h1 {
            font-family: 'Gilda Display', serif;
            font-size: 38px;
            color: #f68278;
            margin-bottom: 40px;
            font-weight: 700;
            text-align: center;
        }
 
        .faq-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            border-left: 6px solid #f68278;
        }
 
        .faq-item h3 {
            font-family: 'Gilda Display', serif;
            font-size: 20px;
            color: #f68278;
            margin-bottom: 10px;
            font-weight: 600;
        }
 
        .faq-item p {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }
 
        /* Hover effect on FAQ items */
        .faq-item:hover {
            background-color: #fef6f5;
            transform: translateY(-3px);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
        }
 
        .download-btn {
            background-color: #fff;
            color: #f68278;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border: 2px solid #f68278;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            display: inline-block;
        }
 
        .download-btn:hover {
            background-color: #f68278;
            color: #fff;
        }
 
        .button-container {
            text-align: center;
            margin-top: 30px;
        }
 
        /* Hide the button when generating the PDF */
        .no-pdf {
            display: inline-block;
        }
 
        .pdf-hidden {
            display: none;
        }
 
        @media screen and (max-width: 768px) {
            .faq-container {
                padding: 30px;
            }
 
            .faq-item h3 {
                font-size: 18px;
            }
 
            .faq-item p {
                font-size: 14px;
            }
 
            .download-btn {
                font-size: 14px;
            }
        }
</style>
</head>
 
<body>
<div class="faq-container" id="faq-content">
<h1>Frequently Asked Questions (FAQ)</h1>
 
        <!-- FAQ 1 -->
<div class="faq-item">
<h3>1. What are the common dental treatments offered at Tooth and Gum Clinic?</h3>
<p>We offer a variety of treatments including pain relief, cosmetic treatments, kids' dental care, preventive care, and teeth replacement.</p>
</div>
 
        <!-- FAQ 2 -->
<div class="faq-item">
<h3>2. How do I schedule an appointment?</h3>
<p>You can call us directly at +91 8448822629 or use our online booking system to schedule an appointment at your convenience.</p>
</div>
 
        <!-- FAQ 3 -->
<div class="faq-item">
<h3>3. What should I do if I experience severe tooth pain?</h3>
<p>If you're experiencing severe pain, we recommend you contact us immediately for an emergency consultation. Our team will provide the appropriate treatment.</p>
</div>
 
        <!-- FAQ 4 -->
<div class="faq-item">
<h3>4. Do you accept insurance?</h3>
<p>Yes, we accept most major insurance plans. Please contact us to confirm the specifics of your coverage.</p>
</div>
 
        <!-- FAQ 5 -->
<div class="faq-item">
<h3>5. Are there any aftercare instructions after a dental procedure?</h3>
<p>Yes, after your procedure, you will be given detailed aftercare instructions. Make sure to follow them carefully to ensure a smooth recovery.</p>
</div>
 
        <!-- Download Button -->
<div class="button-container no-pdf">
<button class="download-btn" onclick="downloadFAQ()">Download All FAQs as PDF</button>
</div>
</div>
 
    <script>
        function downloadFAQ() {
            const faqContent = document.getElementById('faq-content');
 
            // Temporarily hide the button during PDF generation
            const noPdfElements = document.querySelectorAll('.no-pdf');
            noPdfElements.forEach(el => el.classList.add('pdf-hidden'));
 
            const options = {
                filename: 'FAQ_Answers.pdf',
                image: { type: 'jpeg', quality: 1 },
                html2canvas: { scale: 4 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };
 
            html2pdf().from(faqContent).set(options).save().finally(() => {
                // Restore the button after PDF generation
                noPdfElements.forEach(el => el.classList.remove('pdf-hidden'));
            });
        }
</script>
</body>
 
</html>