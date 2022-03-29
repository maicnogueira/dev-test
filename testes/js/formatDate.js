// Escreva uma função que converta a data de entrada do usuário formatada como MM/DD/YYYY em um formato exigido por uma API (YYYYMMDD). O parâmetro "userDate" e o valor de retorno são strings.

// Por exemplo, ele deve converter a data de entrada do usuário "31/12/2014" em "20141231" adequada para a API.


function formatDate(userDate) {
    let date = userDate.split("/");
    return `${date[2]}${date[0]}${date[1]}`;
  // format from M/D/YYYY to YYYYMMDD
}

console.log(formatDate("12/31/2014"));