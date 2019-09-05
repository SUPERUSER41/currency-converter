import React, { useEffect, useState } from "react";
import "../styles/Switch.css";
import Switch from "react-switch";

const IPPSwitch = props => {
  const handleChange = () => {
    props.swap();
  };
  return (
    <div className="flex-container">
      <label className="flex-item">SELLING</label>
      <div className="flex-item">
        <Switch
          className="switch"
          onColor="#ffffff"
          offColor="#C9C9C9"
          onHandleColor="#92245D"
          uncheckedIcon={false}
          checkedIcon={false}
          onChange={handleChange}
          checked={props.toggle}
        />
      </div>
      <label className="flex-item">BUYING</label>
    </div>
  );
};
export default IPPSwitch;
