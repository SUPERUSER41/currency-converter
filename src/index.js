import React from "react";
import ReactDOM from "react-dom";
import { Provider } from "react-redux";
import { createStore } from "redux";
import "./index.css";
import App from "./App";
import RootReducer from "./reducers";

ReactDOM.render(
  <Provider store={createStore(RootReducer)}>
    <App />
  </Provider>,
  document.getElementById("root")
);

// document.addEventListener("DOMContentLoaded", function() {
//   ReactDOM.render(<App />, document.getElementById("root"));
// });
