import React from "react";
class InputControl extends React.Component {
  constructor(prop) {
    super(prop);
    this.state = {
      inputValue: "",
    };
  }
  render() {
    return (
      <div>
        <input
          value={this.state.inputValue}
          onChange={(event) =>
            this.setState({ inputValue: event.target.value })
          }
        />
        <h1>{this.state.inputValue}</h1>
      </div>
    );
  }
}
export default InputControl;
