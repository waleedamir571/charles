import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import App from "./App";
import reportWebVitals from "./reportWebVitals";
import "bootstrap/dist/css/bootstrap.min.css";
import "./assets/css/style1.css";
import "./assets/css/bootstrap1.min.css";
import "./assets/vendors/themefy_icon/themify-icons.css";
import "./assets/vendors/niceselect/css/nice-select.css";
import "./assets/vendors/owl_carousel/css/owl.carousel.css";
import "./assets/vendors/gijgo/gijgo.min.css";
import "./assets/vendors/font_awesome/css/all.min.css";
import "./assets/vendors/tagsinput/tagsinput.css";
import "./assets/vendors/datepicker/date-picker.css";
import "./assets/vendors/vectormap-home/vectormap-2.0.2.css";
import "./assets/vendors/scroll/scrollable.css";
import "./assets/vendors/datatable/css/jquery.dataTables.min.css";
import "./assets/vendors/datatable/css/responsive.dataTables.min.css";
import "./assets/vendors/datatable/css/buttons.dataTables.min.css";
import "./assets/vendors/text_editor/summernote-bs4.css";
import "./assets/vendors/morris/morris.css";
import "./assets/vendors/material_icon/material-icons.css";
import "./assets/css/metisMenu.css";
import "./assets/css/colors/default.css"; // Or style1.css

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
