import React from "react";
import ReactDOM from "react-dom";

class Text extends React.Component{
	render() {
		return(
	       <h1>Yeah Miley What's good?!</h1>
		)
	}
}

export default Text;

if(document.getElementById('ppp')){
	ReactDOM.render(<Text />, document.getElementById('ppp'));
}