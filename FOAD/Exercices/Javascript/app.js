const Employee = require("./models/Employee.js");
const Enterprise = require("./models/Enterprise.js");



let empl = new Enterprise();
let idObj = 1;

empl.create(new Employee(idObj++, 'Doe', 'John', 'manager', 82000, new Date('2020-05-01')))
empl.create(new Employee(idObj++, 'Amza', 'Red', 'ouvrier', 21000, new Date('2016-03-02')));
empl.create(new Employee(idObj++, 'tarat', 'Blue', 'sous-fifre', 18000, new Date('2020-03-02')));
empl.create(new Employee(idObj++, 'Turit', 'Yellow', 'boss', 150000, new Date('1990-05-30')));
empl.create(new Employee(idObj++, 'Lomol', 'Brown', 'stagiaire', 9000, new Date('1520-05-27')));



empl.update(new Employee(4, 'Purple', 'Platon', 'tata', 20000, new Date('2001-05-01')));



console.log(empl.readAll('salary'));