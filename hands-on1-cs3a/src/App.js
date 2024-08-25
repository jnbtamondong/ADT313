
import './App.css';
import Fullname from './components/Userinformation/Fullname';
import Section from './components/Userinformation/Section';
import AboutMe from './components/Userinformation/AboutMe';
import { useState } from 'react';


function App() {

  const [isMoving, setIsMoving] = useState(false);
  const[ userInformation, setUserinformation] = useState({
    firstName: 'John Neil',
    middleName: 'Balla',
    lastName: 'Tamondong',
    section: 'Section',
    description: 'Carpe Diem',
  
  });

function updateName(){
  console.log("Before:", userInformation.firstName);
  setUserinformation.firstName = 'Lem'
  setUserinformation({...userInformation});

console.log("After", userInformation)
}
  return (
        
    <div className='App'>
      <FullName
      firstName={userInformation.firstName}
      middleName={userInformation.middleName}
      lastName={userInformation.lastName}
      />
      <Section section={userInformation.section}/>  
      <Description description={userInformation.description}/>  

      <button type = 'button' onClick={updateName}>updateName</button>
      <button type='button' onClick= {() =>setIsMoving(!isMoving)}></button>

    </div>
  
  );
}

export default App;
