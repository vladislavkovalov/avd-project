import React, {Component} from 'react';
import { config } from '../config';
import axios from 'axios';
import SlotBlock from './SlotBlock';

class AdvBlock extends Component {
    
    toggleLazy(status, value){
        status = !status;
        this.state.showBtn  = status ? true : false;
        this.state.showSlot = status ? false : true;
        console.log(this.state.showBtn);
        axios({
            method: 'POST',
            url: `${config.apiHost}${config.params}`,
            data: {
                status: status,
                value: value,
            }
        }).then(res => {
            this.setState({
                is_lazy: res.data,
            })
        });
    }
    
    toggleAdv(status, value){
        status = !status;
        axios({
            method: 'POST',
            url: `${config.apiHost}${config.params}`,
            data: {
                status: status,
                value: value,
            }
        }).then(res => {
            this.setState({
                is_available: res.data,
            })
        });
    }
    
    constructor (props) {
        super(props)
        this.state = {
            checkbox_lazy: 'lazy',
            checkbox_adv: 'adv',
            is_available: '',
            is_lazy: '',
            showSlot: '',
            showBtn: '',
        };
        
        this.onClick = this.onClick.bind(this);
    }
    
    async componentDidMount() {
        await axios.get(`${config.apiHost}${config.params}`)
            .then(res => {
                this.setState({
                    is_available: res.data.is_available,
                    is_lazy: res.data.is_lazy,
                })
                
                this.state.showSlot = res.data.is_lazy ? false : true;
                this.state.showBtn = res.data.is_lazy ? true : false;
                
            })
    }
    
    onClick(){
        this.setState({ showSlot: !this.state.showSlot });
    }
    
    
    render() {
      return (
        <div className="right-block">      
            <div className="settings-block">
                <span className="title-adv">
                    {this.props.title}
                </span>
                <div className="form-group">
                    <label name="adv">on/off</label>
                    <input type="checkbox"
                      checked={this.state.is_available}
                      onChange={(evt) => this.toggleAdv(this.state.is_available, this.state.checkbox_adv)}
                    />
                </div>
                <div className="form-group">
                    <label name="adv">lazy</label>
                    <input type="checkbox"
                      checked={this.state.is_lazy == 1 ? true : false}
                      onChange={(evt) => this.toggleLazy(this.state.is_lazy, this.state.checkbox_lazy)}
                    />
                </div>
                { this.state.showBtn ? <button onClick={this.onClick} >{this.props.button_title}</button> : null }
            </div>
            { this.state.showSlot && !this.state.is_available ? <SlotBlock /> : null }
        </div>  
      )
    }
}
export default AdvBlock;