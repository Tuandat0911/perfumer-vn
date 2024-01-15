var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
  });

const loginsec = document.querySelector('.login-section');
const RegisterLink = document.querySelector('.Register-link');
const LoginLink = document.querySelector('.Login-link');

LoginLink.addEventListener('click',()=>{
    loginsec.classList.add('active')
}
)

RegisterLink.addEventListener('click',()=>{
  loginsec.classList.remove('active')
}
)

function resetForm() {
    // Lấy tất cả các input trong form và đặt giá trị của chúng về trống
    var inputs = document.querySelectorAll('form input');
    inputs.forEach(function(input) {
        input.value = '';
    });
}