import './App.css';
import Bebras from './Components/003/Bebras';

function App() {
  return (
    <div className="App">
      <header className="App-header">

        <Bebras color = 'skyblue' lt = '1px' name = 'Jurga' />
        <Bebras color = 'brown' lt = '3px' name = 'Lina'/>
        <Bebras color = 'yellow' lt = '-5px' name = 'Sima'/>
        
        
      </header>
    </div>
  );
}

export default App;
