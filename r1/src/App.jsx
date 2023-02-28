import "bootstrap/dist/css/bootstrap.min.css";
import { useEffect, useState } from "react";
import "./App.scss";
import axios from 'axios'




function App() {

  const [users, SetUsers] = useState(null);

  useEffect(() => {
    axios.get('https://jsonplaceholder.typicode.com/users')
    .then(res => {
      //console.log(res.data);
      SetUsers(res.data)
    })

  }, []);
    


  return (
    <div className="App">
      <header className="App-header">
        <h1>Users List</h1>
        <ul>
            {
              users.map(u => <li key={u.id}>{u.name}</li> )
            }
        </ul>
      </header>
    </div>
  );
}

export default App;
