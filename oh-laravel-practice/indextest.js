import axios from "axios"
// const event = new Promise((resolve, reject) => {
//     let name = 'Pedro';
//     if (name == "Pedro") {
//         resolve(name);
//     } else {
//         reject("Name was not Pedro, name was: " + name);
//     }
// });

// event
//     .then((name) => {
//         console.log(name);
//     })
//     .catch((err) => {
//         console.log(err);
//     })
//     .finally(() => {
//         console.log("PROMISE FINISHED" + name);
//     });

const data = axios.get("https://catfact.ninja/fact");

data
    .then(({data : {fact, length}}) => {
    console.log(fact + 'with total length of ' + length + 'characters');
})
    .catch(({response : {status, statusText}}) => {
    console.log(`Status ${status}, Data ${statusText}`);  
})
    .finally(() => {
    console.log("END OF PROMISE");
});

// async function fetchData() {

// };

// const fetchData = async () => {
//     try {
//         const {data : {fact}} = await axios.get("https://catfact.ninja/factt");
//         console.log(fact);
//     } catch ({response}) {
//         console.log(`Status ${response.status}, Data ${response.statusText}`);
//     }
// };

// fetchData();