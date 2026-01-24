<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SDS & TDS Request | Rajasthan Minerals & Chemicals</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
    }

    .hero {
      background: #0d6efd;
      color: #fff;
      padding: 60px 0;
      text-align: center;
    }

    .form-card {
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    .required::after {
      content: " *";
      color: red;
    }

    .sds-hero {
      position: relative;
      min-height: 420px;
      display: flex;
      align-items: center;
      background: url('images/sds-hero.jpg') center/cover no-repeat;
      color: #fff;
    }

    .sds-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.65);
    }

    .sds-content {
      position: relative;
      max-width: 900px;
    }

    .sds-content h1 {
      font-size: 42px;
      font-weight: 700;
      margin-bottom: 12px;
    }

    .red-line {
      width: 120px;
      height: 4px;
      background: #0d6efd;
      margin: 15px 0 25px;
    }

    .sds-content .lead {
      font-size: 18px;
      margin-bottom: 18px;
      color: #f1f1f1;
    }

    .sds-content .note {
      font-size: 16px;
      color: #ddd;
      margin-bottom: 30px;
    }

    .warning-icon {
      color: #ffc107;
      margin-right: 6px;
    }

    .sds-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .sds-actions .btn {
      padding: 12px 22px;
      font-weight: 600;
      border-radius: 6px;
    }

    /* NEW FORM STYLES */
    .form-container {
      max-width: 900px;
      margin: 0 auto;
      padding: 40px 20px;
    }
    
    .form-section-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      margin-bottom: 30px;
    }
    
    .form-header-section {
      background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
      color: white;
      padding: 30px;
    }
    
    .form-header-section h2 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 8px;
    }
    
    .form-header-section p {
      opacity: 0.9;
      margin-bottom: 0;
    }
    
    .form-body {
      padding: 40px;
    }
    
    .form-section-title {
      font-size: 18px;
      font-weight: 600;
      color: #2c3e50;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 2px solid #e9ecef;
      display: flex;
      align-items: center;
    }
    
    .form-section-title i {
      margin-right: 10px;
      color: #0d6efd;
    }
    
    .form-group-enhanced {
      margin-bottom: 24px;
    }
    
    .form-label {
      font-weight: 600;
      color: #495057;
      margin-bottom: 8px;
    }
    
    .form-control-custom {
      border: 2px solid #dee2e6;
      border-radius: 8px;
      padding: 12px 16px;
      font-size: 16px;
      transition: all 0.3s;
    }
    
    .form-control-custom:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
    }
    
    .form-select-custom {
      border: 2px solid #dee2e6;
      border-radius: 8px;
      padding: 12px 16px;
      font-size: 16px;
      transition: all 0.3s;
    }
    
    .form-select-custom:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
    }
    
    .textarea-custom {
      min-height: 120px;
      resize: vertical;
    }
    
    .form-footer {
      background: #f8f9fa;
      padding: 30px;
      border-top: 1px solid #e9ecef;
    }
    
    .form-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .btn-submit {
      background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
      border: none;
      padding: 14px 36px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.3s;
    }
    
    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(13, 110, 253, 0.25);
    }
    
    .btn-reset {
      padding: 14px 24px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 8px;
    }
    
    .required-info {
      color: #666;
      font-size: 14px;
      margin-top: 20px;
    }
    
    /* MOBILE */
    @media (max-width: 768px) {
      .sds-content h1 {
        font-size: 30px;
      }

      .sds-content .lead {
        font-size: 16px;
      }

      .sds-actions {
        flex-direction: column;
      }

      .sds-actions .btn {
        width: 100%;
        text-align: center;
      }
      
      .form-body {
        padding: 25px;
      }
      
      .form-header-section {
        padding: 20px;
      }
      
      .form-header-section h2 {
        font-size: 24px;
      }
      
      .form-actions {
        flex-direction: column;
        gap: 15px;
      }
      
      .form-actions .btn {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <?php include 'nav.php'; ?>

  <!-- SDS & TDS HERO -->
  <section class="sds-hero">
    <div class="container">
      <div class="sds-content">

        <h1>SDS &amp; TDS Request</h1>
        <div class="red-line"></div>

        <p class="lead">
          Safety Data Sheets (SDS) and Technical Data Sheets (TDS) provide essential
          safety, handling, and performance information for our chemical products.
        </p>

        <p class="note">
          <span class="warning-icon">⚠</span>
          Existing customers may request SDS/TDS by phone or email.
          New customers can submit the request form below and our team will assist you promptly.
        </p>

      </div>
    </div>
  </section>

  <!-- FORM SECTION -->
  <div class="form-container">
    <div class="form-section-card">
      <!-- Form Header -->
      <div class="form-header-section">
        <h2><i class="bi bi-file-earmark-text me-2"></i>SDS & TDS Request Form</h2>
        <p>Complete this form to request Safety Data Sheets or Technical Data Sheets for our products</p>
      </div>
      
      <!-- Form Body -->
      <div class="form-body">
        <form action="sds-tds-request.php" method="post">
          
          <!-- COMPANY INFO SECTION -->
          <div class="form-section-title">
            <i class="bi bi-building"></i>
            Company Info
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group-enhanced">
                <label class="form-label">Company name</label>
                <input type="text" name="company_name" class="form-control form-control-custom" 
                       placeholder="Enter your company name">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group-enhanced">
                <label class="form-label">Designation/Department</label>
                <input type="text" name="designation" class="form-control form-control-custom" 
                       placeholder="Enter your designation/department">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group-enhanced">
                <label class="form-label required">Name</label>
                <input type="text" name="name" class="form-control form-control-custom" 
                       placeholder="Enter your full name" required>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group-enhanced">
                <label class="form-label required">Phone Number</label>
                <input type="tel" name="phone" class="form-control form-control-custom" 
                       placeholder="Enter your phone number" required>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group-enhanced">
                <label class="form-label required">Email Address</label>
                <input type="email" name="email" class="form-control form-control-custom" 
                       placeholder="your.email@example.com" required>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group-enhanced">
                <label class="form-label">City & State</label>
                <input type="text" name="city_state" class="form-control form-control-custom" 
                       placeholder="Enter your city and state">
              </div>
            </div>
          </div>
          
          <!-- PRODUCT & DOCUMENTS DETAILS SECTION -->
          <div class="form-section-title">
            <i class="bi bi-file-earmark-text"></i>
            Product & Documents Details
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group-enhanced">
                <label class="form-label required">Product Name</label>
                <input type="text" name="product_name" class="form-control form-control-custom" 
                       placeholder="Enter the product name" required>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group-enhanced">
                <label class="form-label required">Document Type</label>
                <select name="document_type" class="form-select form-select-custom" required>
                  <option value="">Select document type</option>
                  <option value="TDS">Technical Data Sheet (TDS)</option>
                </select>
              </div>
            </div>
            
            <div class="col-12">
              <div class="form-group-enhanced">
                <label class="form-label required">Requesting For</label>
                <input type="text" name="request_for" class="form-control form-control-custom" 
                       placeholder="If requesting on behalf of another company/organization" required>
              </div>
            </div>
          </div>
          
          <!-- ADDITIONAL INFORMATION SECTION -->
          <div class="form-section-title">
            <i class="bi bi-info-circle"></i>
            Additional Information
          </div>
          
          <div class="row">
            <div class="col-12">
              <div class="form-group-enhanced">
                <label class="form-label">Additional Notes</label>
                <textarea name="additional_info" rows="4" class="form-control form-control-custom textarea-custom" 
                          placeholder="Enter any additional information or special requests..."></textarea>
              </div>
            </div>
          </div>
          
          <!-- Form Footer -->
          <div class="form-footer">
            <div class="form-actions">
              <button type="reset" class="btn btn-reset btn-outline-secondary">
                <i class="bi bi-arrow-clockwise me-2"></i>Clear Form
              </button>
              <button type="submit" class="btn btn-submit text-white">
                <i class="bi bi-send-check me-2"></i>Submit Request
              </button>
            </div>
            
            <div class="required-info">
              <p class="mb-0"><span class="required"></span> indicates required fields. We typically respond within 24-48 business hours.</p>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include 'footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Form Validation -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      
      // Add required attribute to all fields marked with *
      const requiredFields = form.querySelectorAll('.required');
      
      form.addEventListener('submit', function(event) {
        let isValid = true;
        const inputs = form.querySelectorAll('input[required], select[required]');
        
        inputs.forEach(input => {
          if (!input.value.trim()) {
            isValid = false;
            input.style.borderColor = 'red';
          } else {
            input.style.borderColor = '';
          }
        });
        
        if (!isValid) {
          event.preventDefault();
          alert('Please fill in all required fields marked with *');
        }
      });
      
      // Reset form styles
      form.querySelector('button[type="reset"]').addEventListener('click', function() {
        const inputs = form.querySelectorAll('input, select');
        inputs.forEach(input => {
          input.style.borderColor = '';
        });
      });
    });
  </script>
</body>
</html>