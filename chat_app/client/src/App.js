import React from 'react';
import { BrowserRouter, Switch, Route } from 'react-router-dom';

import Join from './components/Join/Join';
import Chat from './components/Chat/Chat';

const App = () => (
   <BrowserRouter>
      <Switch>
         <Route exact path='/' component={Join} />
         <Route path='/chat' component={Chat} />
      </Switch>
   </BrowserRouter>

);

export default App;