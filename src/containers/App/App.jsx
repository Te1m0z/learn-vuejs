import { BrowserRouter, Switch, Route } from 'react-router-dom';

import routesConfig from '../../routes/routesConfig.js';

import Header from '../../components/Header';

// styles
// import s from './app.module.css';

const App = () => {
  return (
    <BrowserRouter>
      <Header />
      <Switch>
        {routesConfig.map(({ path, exact, component }, idx) => (
          <Route
            key={idx}
            path={path}
            exact={exact}
            component={component}
          />
        ))}
      </Switch>
    </BrowserRouter>
  )
}

export default App;
