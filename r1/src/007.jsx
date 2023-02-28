import "bootstrap/dist/css/bootstrap.min.css";
import { useEffect, useState } from "react";
import "./App.scss";
import axios from 'axios';




function App() {

  const [users, SetUsers] = useState(null);

  useEffect(() => {
    axios.get('https://jsonplaceholder.typicode.com/users')
    .then(res => {
      console.log(res.data);
      SetUsers(res.data.map((u, i) => ({...u, row: i})));
    });

  }, []);
    

  const sort = () => {
    SetUsers(u => [...u].sort((a, b) => a.name.localeCompare(b.name)));
  }

  const sortBack = () => {
    SetUsers(u => [...u].sort((a, b) => a.row - b.row));
  }

  const sortFancy = () => {
    SetUsers(u => [...u].sort((a, b) => b.name.length - a.name.length));
  }

  return (
    <div className="App">
      <header className="App-header">
        <h1>Users List</h1>
          <ul> 
            {
              users?.map(u => <li key={u.id}>{u.name} <small style={{fontSize: '50%'}}>{u.company.catchPhrase}</small> </li> )
            }
        </ul>
        <button className="btn btn-outline-primary m-4" onClick={sort}>Sort</button>
        <button className="btn btn-outline-primary m-4" onClick={sortBack}>Sort Back</button>
        <button className="btn btn-outline-primary m-4" onClick={sortFancy}>Sort Fancy</button>
      </header>
    </div>
  );
}

export default App;
