import React, {Component} from 'react';

class TextBlock extends Component {
    render() {
      return (
      	<div className="text-block">
            <span>
        	{this.props.text}
            </span>
        </div>
      )
    }
}
export default TextBlock;