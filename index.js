// console.log('working')
// document.getElementById("contactForm").addEventListener("submit", async function (e) {
//     e.preventDefault(); 

//     const formData = new FormData(this);

//     try {
//         const response = await fetch("contact.php", {
//             method: "POST",
//             body: formData,
//         });

//         const result = await response.json();

//         if (result.status === "success") {
//             Swal.fire("Success!", result.message, "success");
//         } else {
//             Swal.fire("Error!", result.message, "error");
//         }
//     } catch (error) {
//         Swal.fire("Error!", "An error occurred. Please try again later.", "error");
//     }
// });