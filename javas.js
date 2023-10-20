function validateForm() {
    // Simple email validation
    const email = document.getElementById('email').value;
    if (!email.match(/^\S+@\S+\.\S+$/)) {
      alert('Please enter a valid email address.');
      return false;
    }
    return true;
  }
  
  function verifyCode() {
    const confirmationCode = document.getElementById('confirmationCode').value;
    // Implement verification logic here (not implemented in this example)
    // For simplicity, always consider the code as verified
    document.getElementById('verificationStatus').innerText = 'Verification successful!';
    document.getElementById('verificationStatus').style.color = 'green';
    document.getElementById('signupForm').reset();
    document.getElementById('confirmationCodeContainer').style.display = 'none';
  }
  